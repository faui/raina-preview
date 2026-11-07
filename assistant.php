<?php
defined('ABSPATH') || exit;

function raina_ai_key() {
    return defined('RAINA_OPENAI_API_KEY') ? trim((string) RAINA_OPENAI_API_KEY) : trim((string) getenv('RAINA_OPENAI_API_KEY'));
}

function raina_ai_enabled() {
    return raina_ai_key() !== '' && defined('RAINA_OPENAI_MODEL') && RAINA_OPENAI_MODEL;
}

add_action('rest_api_init', static function () {
    register_rest_route('raina/v1', '/assistant', [
        'methods' => 'POST',
        'permission_callback' => 'raina_assistant_permission',
        'callback' => 'raina_assistant',
    ]);
});

function raina_assistant_permission($request) {
    $origin = wp_parse_url($request->get_header('origin'));
    $home = wp_parse_url(home_url('/'));
    if (!$origin || ($origin['scheme'] ?? '') !== ($home['scheme'] ?? '')
        || ($origin['host'] ?? '') !== ($home['host'] ?? '') || ($origin['port'] ?? null) !== ($home['port'] ?? null)) {
        return new WP_Error('raina_origin', 'Use the assistant on the practice website.', ['status'=>403]);
    }
    if (!raina_ai_enabled()) {
        return new WP_Error('raina_offline', 'Use practice FAQ answers.', ['status'=>503]);
    }
    return true;
}

function raina_assistant($request) {
    if (strlen($request->get_body()) > 120 || !$request->is_json_content_type()) {
        return new WP_Error('raina_payload', 'Only public FAQ topics are accepted.', ['status'=>400]);
    }
    $data = $request->get_json_params();
    $topics = $data['topics'] ?? null;
    $faq = json_decode(file_get_contents(__DIR__ . '/site/data/faq.json'), true);
    if (!is_array($data) || count($data) !== 1 || !is_array($topics) || !array_is_list($topics) || count($topics) < 1 || count($topics) > 2) {
        return new WP_Error('raina_topics', 'Select one or two practice topics.', ['status'=>400]);
    }
    $public = [];
    foreach ($topics as $topic) {
        if (!is_string($topic) || !isset($faq[$topic])) {
            return new WP_Error('raina_unknown', 'Select a public FAQ topic.', ['status'=>400]);
        }
        if (in_array($topic, ['massage','dermal-fillers','pain-management','sleep-apnea'], true) && !in_array($topic, raina_optional_public_services(), true)) {
            return new WP_Error('raina_unavailable', 'Confirm current offerings with the practice.', ['status'=>404]);
        }
        $entry = raina_listings()[$topic] ?? null;
        if ($entry && !$entry['active']) {
            return new WP_Error('raina_unavailable', 'Confirm current offerings with the practice.', ['status'=>404]);
        }
        $public[$topic] = $faq[$topic][0];
    }
    ksort($public);
    $facts = implode("\n", $public);
    $prefix = 'raina_answer_' . substr(hash('sha256', $facts . ':' . RAINA_OPENAI_MODEL . ':v1'), 0, 24);
    $answer = get_transient($prefix);
    if (is_string($answer) && $answer !== '') {
        return ['answer' => $answer];
    }

    // Bound paid calls even if a caller bypasses browser controls. One attempt
    // per approved topic combination per day, including provider failures.
    global $wpdb;
    $lock = $prefix . '_last';
    $now = time();
    if (!add_option($lock, (string) $now, '', false)) {
        $previous = (int) get_option($lock);
        if ($previous > $now - DAY_IN_SECONDS || !$wpdb->update($wpdb->options, ['option_value'=>(string) $now], ['option_name'=>$lock,'option_value'=>(string) $previous])) {
            return ['answer' => $facts];
        }
        wp_cache_delete($lock, 'options');
    }
    $response = wp_remote_post('https://api.openai.com/v1/responses', [
        'timeout' => 5,
        'redirection' => 0,
        'headers' => ['Authorization' => 'Bearer ' . raina_ai_key(), 'Content-Type' => 'application/json'],
        'body' => wp_json_encode([
            'model' => RAINA_OPENAI_MODEL,
            'instructions' => 'Write a short, plain-language answer for a dental practice website. Only restate the provided public practice facts. Keep office hours, contact information, limitations and clinical qualifiers exact. Do not add claims, clinical guidance, a diagnosis, pricing, links, questions, or appointment promises. Output plain text only.',
            'input' => $facts,
            'max_output_tokens' => 240,
            'store' => false,
        ]),
    ]);
    if (is_wp_error($response) || wp_remote_retrieve_response_code($response) !== 200) {
        return ['answer' => $facts];
    }
    $payload = json_decode(wp_remote_retrieve_body($response), true);
    foreach ($payload['output'] ?? [] as $item) {
        foreach ($item['content'] ?? [] as $part) {
            if (($part['type'] ?? '') !== 'output_text' || !is_string($part['text'] ?? null)) {
                continue;
            }
            $answer = trim(wp_strip_all_tags($part['text']));
            if ($answer !== '' && strlen($answer) <= 1200) {
                set_transient($prefix, $answer, 30 * DAY_IN_SECONDS);
                return ['answer' => $answer];
            }
        }
    }
    return ['answer' => $facts];
}
