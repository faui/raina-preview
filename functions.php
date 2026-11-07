<?php
defined('ABSPATH') || exit;

require_once __DIR__ . '/editor.php';
require_once __DIR__ . '/assistant.php';

function raina_launch() {
    return defined('RAINA_PUBLIC_LAUNCH') && RAINA_PUBLIC_LAUNCH === true;
}

function raina_data($name) {
    return json_decode(require __DIR__ . '/site/data/' . $name . '.php', true) ?: [];
}

function raina_template($path) {
    ob_start();
    require $path;
    return ob_get_clean();
}

function raina_day() {
    return (new DateTimeImmutable('now', new DateTimeZone('America/Chicago')))->format('Y-m-d');
}

function raina_listings() {
    static $result;
    if (isset($result)) {
        return $result;
    }
    $result = [];
    foreach (get_posts(['post_type' => 'raina_listing', 'post_status' => 'publish', 'numberposts' => -1, 'orderby' => 'ID', 'order' => 'ASC']) as $post) {
        $original = get_post_meta($post->ID, 'raina_original', true);
        $slug = $original ?: 'listing-' . $post->post_name;
        $start = get_post_meta($post->ID, 'raina_start', true);
        $end = get_post_meta($post->ID, 'raina_end', true);
        $result[$slug] = [
            'post' => $post,
            'active' => get_post_meta($post->ID, 'raina_hide', true) !== '1'
                && (!$start || $start <= raina_day()) && (!$end || $end >= raina_day()),
            'group' => get_post_meta($post->ID, 'raina_group', true),
            'featured' => get_post_meta($post->ID, 'raina_feature', true) === '1',
            'end' => $end,
        ];
    }
    return $result;
}

const RAINA_OPTIONAL_SERVICES = ['massage', 'dermal-fillers', 'pain-management', 'sleep-apnea'];

/** Services that must not be promoted anywhere public: hidden/expired editor listings and unapproved optional offerings. */
function raina_hidden_services() {
    static $hidden;
    if (isset($hidden)) {
        return $hidden;
    }
    $inactive = array_keys(array_filter(raina_listings(), static function ($item) {
        return !$item['active'];
    }));
    $hidden = array_values(array_unique(array_merge($inactive, array_diff(RAINA_OPTIONAL_SERVICES, raina_optional_public_services()))));
    return $hidden;
}

function raina_optional_public_services() {
    return array_values(array_intersect((array) get_option('raina_approved_optional_services', []), ['massage','dermal-fillers','pain-management','sleep-apnea']));
}

function raina_home_content($html, $listings) {
    $groups = [];
    $services = raina_data('services');
    foreach ($listings as $slug => $item) {
        if (!$item['active']) {
            unset($services[$slug]);
            continue;
        }
        $services[$slug] = [$item['post']->post_title, $item['group'] ?: ($services[$slug][1] ?? 'Practice offerings')];
    }
    $approved_optional = raina_optional_public_services();
    foreach ($services as $slug => [$title, $group]) {
        if (in_array($slug, ['massage','dermal-fillers','pain-management','sleep-apnea'], true) && !in_array($slug, $approved_optional, true)) { continue; }
        if (in_array($slug, ['smart','ozone','massage','membership'], true)) {
            $group = 'Biological care & membership';
        }
        $groups[$group][] = '<li><a href="/care/' . esc_attr($slug) . '/">' . esc_html($title) . '<svg class="icon" aria-hidden="true"><use href="#i-arrow"/></svg></a></li>';
    }
    $directory = '';
    foreach ($groups as $group => $links) {
        $directory .= '<article class="care-group"><h3>' . esc_html($group) . '</h3><ul>' . implode('', $links) . '</ul></article>';
    }
    $html = preg_replace_callback('~<!-- RAINA_DIRECTORY -->.*?<!-- /RAINA_DIRECTORY -->~s', static function () use ($directory) {
        return $directory;
    }, $html);
    $offers = '';
    foreach ($listings as $slug => $item) {
        if (!$item['active'] || !$item['featured'] || (in_array($slug, ['massage','dermal-fillers','pain-management','sleep-apnea'], true) && !in_array($slug, $approved_optional, true))) {
            continue;
        }
        $end = $item['end'] ? '<p class="eyebrow">Available through ' . esc_html(wp_date('F j, Y', strtotime($item['end'] . ' 12:00:00 UTC'), new DateTimeZone('America/Chicago'))) . '</p>' : '';
        $offers .= '<article class="detail-card">' . $end . '<h3>' . esc_html($item['post']->post_title) . '</h3><p>'
            . esc_html(raina_intro($item['post'])) . '</p><a class="text-link" href="/care/' . esc_attr($slug) . '/">View details</a></article>';
    }
    if ($offers) {
        $html = str_replace('<!-- RAINA_TIMED_OFFERS -->', '<section class="wrap timed-offers" aria-labelledby="timed-title"><p class="eyebrow">At the practice</p><h2 id="timed-title">Featured offerings</h2>' . $offers . '</section>', $html);
    }
    $image_id = (int) get_option('raina_tech_image');
    $image = wp_get_attachment_image($image_id, 'large', false, ['loading' => 'lazy', 'decoding' => 'async']);
    if ($image) {
        $html = preg_replace_callback('~<figure class="tech-media">.*?</figure>~s', static function () use ($image) {
            return '<figure class="tech-media">' . $image . '<figcaption>Technology at Raina Dental Care</figcaption></figure>';
        }, $html);
    }
    return $html;
}

function raina_intro($post) {
    return $post->post_excerpt ?: wp_trim_words(wp_strip_all_tags($post->post_content), 28);
}

function raina_listing_page($post) {
    $original = get_post_meta($post->ID, 'raina_original', true);
    $file = __DIR__ . '/site/care/' . sanitize_key($original) . '/index.php';
    $html = raina_template(is_file($file) ? $file : __DIR__ . '/site/care/exams/index.php');
    $title = esc_html($post->post_title);
    $intro = esc_html(raina_intro($post));
    $html = preg_replace_callback('~<title>.*?</title>~s', static function () use ($title) {
        return '<title>' . $title . ' | Raina Dental Care</title>';
    }, $html);
    $html = preg_replace_callback('~<meta name="description"[^>]*>~', static function () use ($intro) {
        return '<meta name="description" content="' . $intro . '">';
    }, $html);
    $html = preg_replace_callback('~<h1>.*?</h1><p class="detail-lead">.*?</p>~s', static function () use ($title, $intro) {
        return '<h1>' . $title . '</h1><p class="detail-lead">' . $intro . '</p>';
    }, $html);
    $body = wpautop(wp_kses_post($post->post_content));
    return preg_replace_callback('~<section class="editorial-intro".*?</section>~s', static function () use ($body) {
        return '<section class="editorial-intro prose" aria-label="About this service"><h2>About this service</h2>' . $body . '</section>';
    }, $html);
}

add_action('template_redirect', 'raina_serve', 0);
function raina_serve() {
    if (is_feed() || is_preview() || is_trackback() || is_embed() || is_search()) {
        return;
    }
    $base = trailingslashit(wp_parse_url(home_url('/'), PHP_URL_PATH) ?: '/');
    $request = wp_parse_url(wp_unslash($_SERVER['REQUEST_URI'] ?? '/'), PHP_URL_PATH) ?: '/';
    if (strpos($request, $base) !== 0) {
        return;
    }
    $route = trim(substr($request, strlen($base)), '/');
    $aliases = raina_data('redirects');
    $target = $aliases[$route] ?? null;
    // Legacy WordPress blog archives (category, tag, date and paged listings) from the original site.
    if (!$target && preg_match('~^(?:category|tag)/[a-z0-9-]+(?:/page/\d+)?$|^(?:19|20)\d\d/\d\d(?:/\d\d)?(?:/page/\d+)?$~D', $route)) {
        $target = '/journal/';
    }
    if ($target) {
        // Until the journal is approved for launch, send readers to the closest public explainer rather than a 404.
        if (str_starts_with($target, '/journal/') && raina_launch() && !get_option('raina_journal_approved')) {
            $target = '/care/approach/';
        }
        wp_safe_redirect(home_url($target), 301, 'Raina Nocturne');
        exit;
    }
    if ($route === 'website-editor') {
        auth_redirect();
        wp_safe_redirect(admin_url('admin.php?page=raina-website'));
        exit;
    }
    if ($route === 'raina-sitemap.xml') {
        raina_sitemap();
    }
    if ($route !== '' && !preg_match('~^(care(?:/[a-z0-9-]+)?|journal(?:/[a-z0-9-]+)?)$~D', $route)) {
        if (!is_404()) {
            return; // Genuine WordPress posts/pages keep rendering through index.php.
        }
        // Unknown URLs get the branded page with an honest 404 status instead of the bare fallback template.
        status_header(404);
        nocache_headers();
        $show = !raina_launch() || (bool) get_option('raina_journal_approved');
        echo raina_render(raina_template(__DIR__ . '/site/404.php'), $show, (bool) get_option('raina_journal_approved')); // Local template.
        exit;
    }
    $journal = str_starts_with($route, 'journal');
    $journal_approved = (bool) get_option('raina_journal_approved');
    $show_journal = !raina_launch() || $journal_approved;
    $listings = raina_listings();
    $entry = str_starts_with($route, 'care/') ? ($listings[substr($route, 5)] ?? null) : null;
    $path = __DIR__ . '/site/' . ($route ? $route . '/' : '') . 'index.php';
    $optional_blocked = in_array(substr($route, 5), RAINA_OPTIONAL_SERVICES, true) && !in_array(substr($route, 5), raina_optional_public_services(), true);
    $missing = ($journal && !$show_journal) || (raina_launch() && $optional_blocked) || ($entry && !$entry['active']) || (!$entry && !is_file($path));
    status_header($missing ? 404 : 200);
    nocache_headers();
    if (!$missing && $entry) {
        $html = raina_listing_page($entry['post']);
    } else {
        $html = raina_template($missing ? __DIR__ . '/site/404.php' : $path);
    }
    if ($route === '') {
        $html = raina_home_content($html, $listings);
    }
    if ($route === 'care/appointments') {
        $html = raina_booking_markup($html, (string) get_option('raina_booking'));
    }
    if ($route === 'care') {
        $html = raina_directory_extras($html, $listings);
    }
    $html = raina_render($html, $show_journal, $journal_approved);
    if (!$missing && raina_launch()) {
        $url = esc_url(home_url($route ? '/' . $route . '/' : '/'));
        $html = str_replace('</head>', '<link rel="canonical" href="' . $url . '"><meta property="og:url" content="' . $url . '"></head>', $html);
    }
    echo $html; // Local templates and escaped dynamic values.
    exit;
}

function raina_sitemap() {
    if (!raina_launch()) {
        status_header(404);
        exit;
    }
    status_header(200);
    header('Content-Type: application/xml; charset=UTF-8');
    echo '<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
    $routes = raina_data('routes');
    foreach (raina_listings() as $slug => $item) {
        $route = '/care/' . $slug . '/';
        if (!$item['active']) {
            $routes = array_diff($routes, [$route]);
        } elseif (!in_array($route, $routes, true)) {
            $routes[] = $route;
        }
    }
    foreach ($routes as $route) {
        $slug = trim(substr($route, 6), '/');
        if (str_starts_with($route, '/care/') && in_array($slug, raina_hidden_services(), true)) {
            continue;
        }
        if (!str_starts_with($route, '/journal/') || get_option('raina_journal_approved')) {
            echo '<url><loc>' . esc_xml(home_url($route)) . '</loc></url>';
        }
    }
    echo '</urlset>';
    exit;
}

function raina_render($html, $show_journal, $approved) {
    if (!$show_journal) {
        $html = preg_replace('~<a\b[^>]*data-journal-nav[^>]*>.*?</a>|<section\b[^>]*data-journal-nav[^>]*>.*?</section>~s', '', $html);
    }
    if ($approved) {
        $html = preg_replace('~<p\b[^>]*data-editorial-review[^>]*>.*?</p>~s', '', $html);
    }
    // Review quotations show on staging for approval; in public-launch mode only after the practice confirms republication rights.
    $reviews_approved = (bool) get_option('raina_reviews_approved');
    if (raina_launch() && !$reviews_approved) {
        $html = preg_replace('~<(section|div)\b[^>]*data-review-approval[^>]*>.*?<!-- /review-approval --></\1>~s', '', $html);
    }
    if ($reviews_approved) {
        $html = preg_replace('~<p\b[^>]*data-review-pending[^>]*>.*?</p>~s', '', $html);
    }
    if (raina_launch()) {
        $html = preg_replace('~<meta name="robots" content="noindex,nofollow">\s*~', '', $html);
    }
    if (!raina_optional_public_services()) {
        $html = preg_replace('~<!-- RAINA_OPTIONAL -->.*?<!-- /RAINA_OPTIONAL -->~s', '', $html);
    }
    // Remove every link, card or list item that promotes a hidden or unapproved service.
    $hidden = raina_hidden_services();
    if ($hidden) {
        $slugs = implode('|', array_map(static function ($slug) {
            return preg_quote($slug, '~');
        }, $hidden));
        $html = preg_replace('~<(li|article|a)\b[^>]*\bdata-service="(?:' . $slugs . ')"[^>]*>.*?</\1>~s', '', $html);
    }
    $home = esc_url(trailingslashit(home_url('/')));
    $assets = esc_url(trailingslashit(get_stylesheet_directory_uri() . '/site'));
    $config = '<html lang="en" data-root="' . $home . '" data-assets="' . $assets . '" data-hidden-services="' . esc_attr(implode(',', $hidden)) . '"';
    if (raina_ai_enabled()) {
        $config .= ' data-assistant="' . esc_url(rest_url('raina/v1/assistant')) . '"';
    }
    $html = str_replace('<html lang="en"', $config, $html);
    $html = preg_replace('~\b(src|href|content)="/(assets/|style\.css|script\.js)~', '$1="' . $assets . '$2', $html);
    $html = preg_replace('~\bhref="/(?!/)~', 'href="' . $home, $html);
    $html = str_replace('"item":"/', '"item":"' . $home, $html);
    return $html;
}

/** Appointment page: an approved PatientViewer link becomes the primary action; otherwise the honest call-to-schedule path stays primary. */
function raina_booking_markup($html, $booking) {
    if (!$booking) {
        return $html;
    }
    $html = preg_replace('~<!-- RAINA_BOOKING_FALLBACK -->.*?<!-- /RAINA_BOOKING_FALLBACK -->~s', '', $html);
    return str_replace('<!-- RAINA_BOOKING -->', '<div class="booking-online" data-booking-online><p class="eyebrow">Online scheduling</p>'
        . '<h3>Choose a time online.</h3><p>Scheduling opens on the practice’s secure booking service in a new tab. If no time suits you, or your visit is urgent, please call.</p>'
        . '<div class="appointment-actions"><a class="button" rel="noopener noreferrer" target="_blank" href="' . esc_url($booking) . '">Open online scheduling'
        . '<span class="sr-only"> (opens the secure scheduling service in a new tab)</span> <svg class="icon" aria-hidden="true"><use href="#i-out"/></svg></a>'
        . '<a class="text-link" href="tel:+16303814021">Or call (630) 381-4021</a></div></div>', $html);
}

/** Treatment directory: add services the practice created in the editor so new offerings are discoverable without code changes. */
function raina_directory_extras($html, $listings) {
    $known = raina_data('services');
    $items = '';
    foreach ($listings as $slug => $item) {
        if (!$item['active'] || isset($known[$slug])) {
            continue;
        }
        $items .= '<a class="treatment-item" data-service="' . esc_attr($slug) . '" data-keywords="' . esc_attr(strtolower($item['post']->post_title)) . '" href="/care/' . esc_attr($slug) . '/"><span><strong>'
            . esc_html($item['post']->post_title) . '</strong><small>' . esc_html(wp_trim_words(raina_intro($item['post']), 16)) . '</small></span><svg aria-hidden="true" class="icon"><use href="#i-arrow"/></svg></a>';
    }
    if (!$items) {
        return $html;
    }
    return str_replace('<!-- RAINA_EXTRA_LISTINGS -->', '<section class="treatment-category"><div class="category-heading"><p class="eyebrow">Explore by category</p><h2>Also at the practice</h2></div><div class="treatment-list">' . $items . '</div></section>', $html);
}

// One truthful sitemap: the theme's route-aware sitemap replaces WordPress core's, which would list unrelated posts and pages.
add_filter('wp_sitemaps_enabled', '__return_false');
add_filter('robots_txt', static function ($output, $public) {
    if (raina_launch() && $public) {
        $output .= "\nSitemap: " . esc_url_raw(home_url('/raina-sitemap.xml')) . "\n";
    }
    return $output;
}, 10, 2);
