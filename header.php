<?php defined('ABSPATH') || exit; ?>
<!doctype html><html <?php language_attributes(); ?> data-view="nocturne"><head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php if (!raina_launch()) : ?><meta name="robots" content="noindex,nofollow"><?php endif; ?>
<link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_directory_uri() . '/site/style.css'); ?>">
<?php wp_head(); ?></head><body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header"><div class="wrap header-inner"><a class="logo" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/site/assets/logo.png'); ?>" width="488" height="198" alt="Raina Dental Care"></a></div></header>
