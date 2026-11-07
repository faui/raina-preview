<?php defined('ABSPATH') || exit;
$page = [
    'title' => 'Page not found | Raina Dental Care',
    'description' => 'Browse care options or call the practice for help finding what you need.',
    'path' => '/',
];
require __DIR__ . '/partials/top.php';
?>
  <main class="detail-main refined-utility not-found" id="main" tabindex="-1"><div class="detail-hero"><div class="wrap detail-hero-inner"><p class="eyebrow">Error 404</p><h1>We can’t find that page.</h1><p class="detail-lead">It may have moved when our website was redesigned. Try one of these, or call and the team will point you in the right direction.</p><div class="detail-hero-actions"><a class="button" href="/care/">Browse treatments <svg class="icon" aria-hidden="true"><use href="#i-arrow"/></svg></a><a class="text-link" href="/">Home <svg class="icon" aria-hidden="true"><use href="#i-arrow"/></svg></a><a class="text-link" href="/care/appointments/" data-booking-cta>Schedule a visit <svg class="icon" aria-hidden="true"><use href="#i-arrow"/></svg></a><a class="text-link" href="tel:+16303814021">(630) 381-4021 <svg class="icon" aria-hidden="true"><use href="#i-arrow"/></svg></a></div></div></div></main>
<?php require __DIR__ . '/partials/bottom.php';
