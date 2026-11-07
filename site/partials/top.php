<?php
/**
 * Shared document head, utility bar and site header.
 * Expects $page = ['title' => ..., 'description' => ..., 'path' => '/care/x/', 'schema' => bool, 'crumbs' => [[label, href]...]].
 * Root-relative URLs are rewritten to the WordPress home/theme URLs by raina_render() in functions.php.
 */
defined('ABSPATH') || exit;
if (!function_exists('raina_e')) {
    function raina_e($value) {
        return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }
}
$practice = require __DIR__ . '/practice.php';
$page = ($page ?? []) + ['title' => 'Raina Dental Care', 'description' => '', 'path' => '/', 'schema' => false, 'crumbs' => []];
$version = $practice['asset_version'];
$nav = [
    ['/care/approach/', 'Our approach', ''],
    ['/care/', 'Treatments', ''],
    ['/care/team/', 'Our dentists', ''],
    ['/care/membership/', 'Membership', ''],
    ['/journal/', 'Journal', ' data-journal-nav'],
    ['/care/contact/', 'Visit us', ''],
];
$current = static function ($href) use ($page) {
    if ($href === $page['path']) {
        return ' aria-current="page"';
    }
    if ($href !== '/care/' && $href !== '/' && str_starts_with($page['path'], $href)) {
        return ' aria-current="true"';
    }
    return '';
};
?><!doctype html>
<html lang="en" data-view="nocturne">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <meta name="theme-color" content="#0c3235">
  <meta name="robots" content="noindex,nofollow">
  <meta name="description" content="<?php echo raina_e($page['description']); ?>">
  <title><?php echo raina_e($page['title']); ?></title>
  <meta property="og:site_name" content="Raina Dental Care">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo raina_e($page['title']); ?>">
  <meta property="og:description" content="<?php echo raina_e($page['description']); ?>">
  <meta name="twitter:card" content="summary">
  <link rel="icon" href="/assets/favicon.png">
  <link rel="preload" href="/assets/manrope.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="/assets/source-serif.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="/style.css?v=<?php echo raina_e($version); ?>">
  <script src="/script.js?v=<?php echo raina_e($version); ?>" defer></script>
<?php if ($page['schema']) :
    $hours = [];
    foreach ($practice['hours'] as [, , $days, $opens, $closes]) {
        if ($opens) {
            $hours[] = ['@type' => 'OpeningHoursSpecification', 'dayOfWeek' => array_map(static fn($d) => ['Mo' => 'Monday', 'Tu' => 'Tuesday', 'We' => 'Wednesday', 'Th' => 'Thursday', 'Fr' => 'Friday', 'Sa' => 'Saturday', 'Su' => 'Sunday'][$d], $days), 'opens' => $opens, 'closes' => $closes];
        }
    }
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'Dentist',
        'name' => $practice['name'],
        'telephone' => $practice['phone_tel'],
        'address' => ['@type' => 'PostalAddress', 'streetAddress' => $practice['street'] . ', ' . $practice['suite'], 'addressLocality' => $practice['city'], 'addressRegion' => $practice['region'], 'postalCode' => $practice['postal'], 'addressCountry' => 'US'],
        'openingHoursSpecification' => $hours,
    ];
    ?>
  <script type="application/ld+json"><?php echo json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG); ?></script>
<?php endif; ?>
<?php if ($page['crumbs']) :
    $items = [];
    foreach ($page['crumbs'] as $i => [$label, $href]) {
        $items[] = ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $label, 'item' => $href];
    }
    ?>
  <script type="application/ld+json" data-breadcrumbs><?php echo json_encode(['@context' => 'https://schema.org', '@type' => 'BreadcrumbList', 'itemListElement' => $items], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG); ?></script>
<?php endif; ?>
</head>
<body>
  <svg class="symbol-library" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
    <symbol id="i-arrow" viewBox="0 0 24 24"><path d="M4 12h15m-6-6 6 6-6 6"/></symbol>
    <symbol id="i-out" viewBox="0 0 24 24"><path d="M6 18 18 6M8 6h10v10"/></symbol>
    <symbol id="i-pin" viewBox="0 0 24 24"><path d="M19 10c0 5-7 10-7 10S5 15 5 10a7 7 0 1 1 14 0Z"/><circle cx="12" cy="10" r="2"/></symbol>
    <symbol id="i-chat" viewBox="0 0 24 24"><path d="M20 11.5a8 8 0 0 1-8 8 8.6 8.6 0 0 1-3-.5l-4 1.5.9-3.9a8 8 0 1 1 14.1-5.1Z"/><path d="M9 11.5h.01m3 0h.01m3 0h.01"/></symbol>
    <symbol id="i-spark" viewBox="0 0 24 24"><path d="M12 2c0 6-4 10-10 10 6 0 10 4 10 10 0-6 4-10 10-10-6 0-10-4-10-10Z"/></symbol>
    <symbol id="i-phone" viewBox="0 0 24 24"><path d="M8 4H5a1 1 0 0 0-1 1 15 15 0 0 0 15 15 1 1 0 0 0 1-1v-3l-5-2-1.5 2a12 12 0 0 1-5.5-5.5L10 9Z"/></symbol>
    <symbol id="i-clock" viewBox="0 0 24 24"><circle cx="12" cy="12" r="8.5"/><path d="M12 7.5V12l3 2"/></symbol>
    <symbol id="i-check" viewBox="0 0 24 24"><path d="m5 12.5 4.5 4.5L19 7.5"/></symbol>
    <symbol id="i-alert" viewBox="0 0 24 24"><path d="M12 4 2.8 19.5h18.4Z"/><path d="M12 10v4.2m0 2.6h.01"/></symbol>
    <symbol id="i-close" viewBox="0 0 24 24"><path d="m6 6 12 12M18 6 6 18"/></symbol>
    <symbol id="i-menu" viewBox="0 0 24 24"><path d="M4 8h16M4 16h16"/></symbol>
    <symbol id="i-send" viewBox="0 0 24 24"><path d="M4 11.5 20 4l-6.5 16-2.5-7-7-1.5Zm7 1.5 9-9"/></symbol>
  </svg>
  <a class="skip-link" href="#main">Skip to content</a>
  <header class="site-header">
    <div class="utility"><div class="wrap utility-inner">
    <a href="/care/contact/"><svg class="icon" aria-hidden="true"><use href="#i-pin"/></svg> <span><?php echo raina_e($practice['street']); ?>, <?php echo raina_e($practice['city']); ?></span></a>
    <a class="utility-phone" href="tel:<?php echo raina_e($practice['phone_tel']); ?>"><svg class="icon" aria-hidden="true"><use href="#i-phone"/></svg> <?php echo raina_e($practice['phone_display']); ?></a>
  </div></div>
    <div class="wrap header-inner">
      <a class="logo" href="/"><img src="/assets/logo.png" alt="Raina Dental Care — home" width="488" height="198"></a>
      <nav id="site-nav" aria-label="Main navigation">
<?php foreach ($nav as [$href, $label, $attr]) : ?>
        <a href="<?php echo $href; ?>"<?php echo $attr . $current($href); ?>><?php echo raina_e($label); ?></a>
<?php endforeach; ?>
        <div class="nav-drawer-extra">
          <a href="/care/patient-stories/">Patient stories</a>
          <a href="/care/payment/">Insurance &amp; payment</a>
          <a href="/care/emergency/">Dental emergency</a>
          <div class="nav-drawer-actions">
            <a class="button" href="/care/appointments/" data-booking-cta>Schedule a visit</a>
            <a class="button button-quiet" href="tel:<?php echo raina_e($practice['phone_tel']); ?>"><svg class="icon" aria-hidden="true"><use href="#i-phone"/></svg> Call <?php echo raina_e($practice['phone_display']); ?></a>
          </div>
        </div>
      </nav>
      <div class="header-tools">
        <a class="button button-small header-action" href="/care/appointments/" data-booking-cta>Schedule<span class="header-action-long">&nbsp;a visit</span></a>
        <button class="menu-button" type="button" aria-expanded="false" aria-controls="site-nav"><svg class="icon" aria-hidden="true"><use href="#i-menu"/></svg><span class="menu-label">Menu</span></button>
      </div>
    </div>
  </header>
