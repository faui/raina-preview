<?php
/**
 * Fallback for genuine WordPress posts and pages (all patient routes are served by raina_serve()).
 * Renders inside the shared site chrome so any remaining WordPress content matches the brand.
 */
defined('ABSPATH') || exit;
ob_start();
$page = [
    'title' => wp_get_document_title(),
    'description' => is_singular() ? wp_strip_all_tags(get_the_excerpt()) : get_bloginfo('description'),
    'path' => wp_parse_url(get_permalink() ?: home_url('/'), PHP_URL_PATH) ?: '/',
];
require __DIR__ . '/site/partials/top.php';
?>
  <main class="detail-main refined-utility" id="main" tabindex="-1">
<?php if (have_posts()) : ?>
    <div class="detail-hero"><div class="wrap detail-hero-inner"><p class="eyebrow">Raina Dental Care</p><h1><?php echo is_singular() ? esc_html(get_the_title()) : esc_html(wp_strip_all_tags(get_the_archive_title())); ?></h1></div></div>
    <div class="wrap editorial-single prose">
    <?php while (have_posts()) : the_post(); ?>
      <article class="wp-entry">
        <?php if (!is_singular()) : ?><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><?php endif; ?>
        <?php is_singular() ? the_content() : the_excerpt(); ?>
      </article>
    <?php endwhile; ?>
    <?php the_posts_pagination(); ?>
    </div>
<?php else : ?>
    <div class="detail-hero"><div class="wrap detail-hero-inner"><p class="eyebrow">Raina Dental Care</p><h1>Nothing to show here.</h1><p class="detail-lead"><a href="<?php echo esc_url(home_url('/care/')); ?>">Browse treatments</a> or call (630) 381-4021.</p></div></div>
<?php endif; ?>
  </main>
<?php
require __DIR__ . '/site/partials/bottom.php';
$raina_show_journal = !raina_launch() || (bool) get_option('raina_journal_approved');
echo raina_render(ob_get_clean(), $raina_show_journal, (bool) get_option('raina_journal_approved')); // Theme templates; WP content escaped by core.
