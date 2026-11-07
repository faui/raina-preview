<?php
defined('ABSPATH') || exit;

add_action('init', static function () {
    register_post_type('raina_listing', [
        'labels' => ['name' => 'Service updates', 'singular_name' => 'Service update', 'add_new_item' => 'Add or edit a service', 'edit_item' => 'Edit service'],
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => 'raina-website',
        'supports' => ['title', 'editor', 'excerpt', 'revisions'],
        'capability_type' => 'page',
        'map_meta_cap' => true,
    ]);
});

add_action('admin_menu', static function () {
    add_menu_page('Raina Website', 'Raina Website', 'edit_pages', 'raina-website', 'raina_editor_home', 'dashicons-admin-site');
});

add_action('admin_init', static function () {
    register_setting('raina_website', 'raina_approved_optional_services', ['sanitize_callback' => 'raina_optional_services_validate']);
    register_setting('raina_website', 'raina_booking', ['sanitize_callback' => 'raina_booking_url']);
    register_setting('raina_website', 'raina_journal_approved', ['sanitize_callback' => 'absint']);
    register_setting('raina_website', 'raina_reviews_approved', ['sanitize_callback' => 'absint']);
    register_setting('raina_website', 'raina_tech_image', ['sanitize_callback' => 'absint']);
});

function raina_optional_services_validate($raw) {
    return array_values(array_intersect(array_map('sanitize_key',(array) $raw), ['massage','dermal-fillers','pain-management','sleep-apnea']));
}

function raina_booking_url($raw) {
    if (!$raw) {
        return '';
    }
    $url = esc_url_raw($raw, ['https']);
    $host = strtolower(wp_parse_url($url, PHP_URL_HOST) ?? '');
    if (!in_array($host, ['patientviewer.com', 'www.patientviewer.com'], true) || preg_match('/[<>\s]/', $raw)) {
        add_settings_error('raina_booking', 'invalid_booking', 'Enter a complete HTTPS PatientViewer link from the office.');
        return get_option('raina_booking', '');
    }
    return $url;
}

function raina_editor_home() {
    if (!current_user_can('edit_pages')) {
        return;
    }
    $existing = [];
    foreach (get_posts(['post_type'=>'raina_listing', 'post_status'=>['publish','draft','pending','private','future'], 'numberposts'=>-1, 'orderby'=>'ID', 'order'=>'ASC']) as $post) {
        $key = get_post_meta($post->ID, 'raina_original', true);
        if ($key && current_user_can('edit_post', $post->ID)) {
            $existing[$key] = get_edit_post_link($post->ID, 'raw');
        }
    }
    ?>
    <div class="wrap"><h1>Raina Website</h1>
    <p>Change a service, add a limited-time offering, or open the patient website.</p>
    <p><a class="button button-primary" href="<?php echo esc_url(admin_url('post-new.php?post_type=raina_listing')); ?>">Add a service or offer</a>
    <a class="button" href="<?php echo esc_url(home_url('/')); ?>">View the website</a></p>
    <h2>Edit a listed service</h2>
    <p>Choose a service, make your changes and select Publish or Update. To remove it from the site, select Hide this service and save.</p>
    <ul class="raina-editor-list" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(min(100%,260px),1fr));gap:4px 16px;max-width:870px">
    <?php foreach (raina_data('services') as $slug => [$name]) :
        $url = $existing[$slug] ?? add_query_arg(['post_type'=>'raina_listing','raina_original'=>$slug], admin_url('post-new.php')); ?>
        <li><a class="button button-large" href="<?php echo esc_url($url); ?>"><?php echo esc_html($name); ?></a></li>
    <?php endforeach; ?>
    </ul>
    <?php if (current_user_can('manage_options')) : ?>
    <h2>Website settings</h2>
    <?php settings_errors(); ?>
    <form action="<?php echo esc_url(admin_url('options.php')); ?>" method="post">
        <?php settings_fields('raina_website'); ?>
        <p><label for="raina_booking"><strong>Online scheduling link (PatientViewer)</strong></label></p>
        <p><input class="large-text" type="url" id="raina_booking" name="raina_booking" value="<?php echo esc_attr(get_option('raina_booking')); ?>" placeholder="https://www.patientviewer.com/…"></p>
        <p>Leave blank to show “Call to schedule”. Paste only the complete HTTPS link supplied by the practice or PatientViewer, and test it on a phone before publishing.</p>
        <p><label for="raina_tech_image"><strong>Technology photo</strong></label></p>
        <p><select id="raina_tech_image" name="raina_tech_image"><option value="0">Use current illustration</option>
        <?php foreach (get_posts(['post_type'=>'attachment','post_mime_type'=>'image','post_status'=>'inherit','numberposts'=>80]) as $image) : ?>
            <option value="<?php echo esc_attr($image->ID); ?>" <?php selected(get_option('raina_tech_image'),$image->ID); ?>><?php echo esc_html($image->post_title); ?></option>
        <?php endforeach; ?></select></p>
        <p>Upload approved images in Media. Choose a photo here to replace the illustration.</p>
        <p><input name="raina_journal_approved" type="hidden" value="0"><label><input type="checkbox" name="raina_journal_approved" value="1" <?php checked(get_option('raina_journal_approved')); ?>> Dr. Raina has reviewed and approved the six launch articles.</label></p>
        <p><input name="raina_reviews_approved" type="hidden" value="0"><label><input type="checkbox" name="raina_reviews_approved" value="1" <?php checked(get_option('raina_reviews_approved')); ?>> Each patient review excerpt has been checked word for word, and the practice has the right to republish it with the displayed name.</label></p>
        <input type="hidden" name="raina_approved_optional_services[]" value="">
        <h3>Optional offerings — verified active services only</h3>
        <p>These historical offerings are excluded from the public directory and sitemap until the practice explicitly confirms that they are currently active and professionally supervised.</p>
        <?php foreach (['massage'=>'Therapeutic massage','dermal-fillers'=>'Dermal fillers','pain-management'=>'Pain management','sleep-apnea'=>'Sleep apnea services'] as $key=>$label): ?>
        <p><label><input type="checkbox" name="raina_approved_optional_services[]" value="<?php echo esc_attr($key); ?>" <?php checked(in_array($key, raina_optional_public_services(), true)); ?>> <?php echo esc_html($label); ?> — office has verified current availability and licensed provider</label></p>
        <?php endforeach; ?>
        <?php submit_button('Save website settings'); ?>
    </form>
    <?php endif; ?></div>
    <?php
}

function raina_original($post) {
    $saved = get_post_meta($post->ID, 'raina_original', true);
    if ($saved) {
        return $saved;
    }
    $slug = sanitize_key(wp_unslash($_GET['raina_original'] ?? ''));
    return $post->post_status === 'auto-draft' && isset(raina_data('services')[$slug]) ? $slug : '';
}

add_filter('default_title', static function ($value, $post) {
    $original = $post->post_type === 'raina_listing' ? raina_original($post) : '';
    return $original ? raina_data('services')[$original][0] : $value;
}, 10, 2);

add_filter('default_content', static function ($value, $post) {
    $original = $post->post_type === 'raina_listing' ? raina_original($post) : '';
    if (!$original) {
        return $value;
    }
    [, , $intro, $points] = raina_data('services')[$original];
    return esc_html($intro) . "\n\n" . implode("\n\n", array_map('esc_html', (array) $points));
}, 10, 2);

add_action('add_meta_boxes_raina_listing', static function () {
    add_meta_box('raina_display', 'Website display', 'raina_display_fields', 'raina_listing', 'normal', 'high');
});

function raina_display_fields($post) {
    $original = raina_original($post);
    $group = get_post_meta($post->ID, 'raina_group', true) ?: (raina_data('services')[$original][1] ?? 'Practice offerings');
    wp_nonce_field('raina_display', 'raina_display_nonce');
    ?>
    <input type="hidden" name="raina_original" value="<?php echo esc_attr($original); ?>">
    <p><label for="raina_group">Service category</label><br><input id="raina_group" name="raina_group" type="text" maxlength="80" value="<?php echo esc_attr($group); ?>"></p>
    <p><label for="raina_start">Show from</label><br><input id="raina_start" name="raina_start" type="date" value="<?php echo esc_attr(get_post_meta($post->ID,'raina_start',true)); ?>"></p>
    <p><label for="raina_end">Show through</label><br><input id="raina_end" name="raina_end" type="date" min="<?php echo esc_attr(get_post_meta($post->ID,'raina_start',true)); ?>" value="<?php echo esc_attr(get_post_meta($post->ID,'raina_end',true)); ?>"></p>
    <p>Dates use Naperville time. Leave both dates blank to show the service until you change it.</p>
    <p><label><input name="raina_feature" type="checkbox" value="1" <?php checked(get_post_meta($post->ID,'raina_feature',true),'1'); ?>> Feature on the homepage</label></p>
    <p><label><input name="raina_hide" type="checkbox" value="1" <?php checked(get_post_meta($post->ID,'raina_hide',true),'1'); ?>> Hide this service</label></p>
    <?php
}

function raina_date_field($key) {
    $value = sanitize_text_field(wp_unslash($_POST[$key] ?? ''));
    $date = DateTimeImmutable::createFromFormat('!Y-m-d', $value);
    return $date && $date->format('Y-m-d') === $value ? $value : '';
}

add_action('save_post_raina_listing', static function ($post_id) {
    if (wp_is_post_autosave($post_id) || wp_is_post_revision($post_id) || !current_user_can('edit_post', $post_id)
        || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['raina_display_nonce'] ?? '')), 'raina_display')) {
        return;
    }
    $original = get_post_meta($post_id, 'raina_original', true) ?: sanitize_key(wp_unslash($_POST['raina_original'] ?? ''));
    if (isset(raina_data('services')[$original])) {
        update_post_meta($post_id, 'raina_original', $original);
    }
    $start = raina_date_field('raina_start');
    $end = raina_date_field('raina_end');
    if ($start && $end && $end < $start) {
        add_filter('redirect_post_location', static function ($url) {
            return add_query_arg('raina_date_error','1',$url);
        });
        update_post_meta($post_id, 'raina_hide', '1');
        return;
    }
    update_post_meta($post_id, 'raina_start', $start);
    update_post_meta($post_id, 'raina_end', $end);
    update_post_meta($post_id, 'raina_group', sanitize_text_field(wp_unslash($_POST['raina_group'] ?? '')));
    update_post_meta($post_id, 'raina_feature', isset($_POST['raina_feature']) ? '1' : '0');
    update_post_meta($post_id, 'raina_hide', isset($_POST['raina_hide']) ? '1' : '0');
});

add_action('admin_notices', static function () {
    if (isset($_GET['raina_date_error'])) {
        echo '<div class="notice notice-error"><p>The end date must be on or after the start date. This service is hidden until you fix the dates and clear Hide this service.</p></div>';
    }
});
