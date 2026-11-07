<?php defined('ABSPATH') || exit;
$page = [
    'title' => 'Practice updates | Raina Dental Care',
    'description' => 'Explore the practice’s topics on whole-person dentistry, preventive care and what to expect at a visit.',
    'path' => '/care/updates/',
    'crumbs' => [['Home', '/'], ['Practice updates', '/care/updates/']],
];
require dirname(__DIR__, 2) . '/partials/top.php';
?>
  <main class="detail-main" id="main" tabindex="-1"><div class="detail-hero"><div class="wrap detail-hero-inner"><nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span aria-hidden="true">/</span><span aria-current="page">Practice updates</span></nav><p class="eyebrow">Raina Dental Care</p><h1>Practice updates</h1><p class="detail-lead">Explore the practice’s topics on whole-person dentistry, preventive care and what to expect at a visit.</p></div></div><div class="wrap detail-grid"><article class="detail-card prose"><h2>What to know</h2><ul><li>Use the service directory to find treatment information.</li><li>Call the office to confirm current offerings and appointment availability.</li></ul><a class="text-link" href="/care/remineralization/">Explore Tooth remineralization <svg class="icon" aria-hidden="true"><use href="#i-arrow"/></svg></a></article><aside class="detail-aside"><span class="aside-mark" aria-hidden="true">R</span><p class="eyebrow">Raina Dental Care</p><h2>Let’s talk.</h2><p>2323 Naperville Road, Suite 110<br>Naperville, Illinois</p><a class="button" href="/care/appointments/">Schedule a visit <svg class="icon" aria-hidden="true"><use href="#i-arrow"/></svg></a><a class="text-link" href="tel:+16303814021">Call (630) 381-4021 <svg class="icon" aria-hidden="true"><use href="#i-arrow"/></svg></a></aside></div></main>
<?php require dirname(__DIR__, 2) . '/partials/bottom.php';
