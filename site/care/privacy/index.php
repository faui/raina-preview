<?php defined('ABSPATH') || exit;
$page = [
    'title' => 'Website Privacy | Raina Dental Care',
    'description' => 'How the Raina Dental Care website handles information: no advertising trackers, an assistant that keeps your questions in your browser, and outside links.',
    'path' => '/care/privacy/',
    'crumbs' => [['Home', '/'], ['Website privacy', '/care/privacy/']],
];
require dirname(__DIR__, 2) . '/partials/top.php';
?>
  <main class="detail-main refined-utility" id="main" tabindex="-1">
    <div class="detail-hero"><div class="wrap detail-hero-inner"><nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span aria-hidden="true">/</span><span aria-current="page">Website privacy</span></nav><p class="eyebrow">Your information</p><h1>Website privacy</h1><p class="detail-lead">This page explains how this website handles information. It covers the website only; it is not the practice’s Notice of Privacy Practices for your dental records.</p></div></div>
    <section class="wrap editorial-single privacy-page" aria-labelledby="privacy-title">
      <div class="section-intro-narrow"><p class="eyebrow">Website notice · Updated November 2026</p><h2 id="privacy-title">What this website does with information.</h2></div>
      <div class="explain-list">
        <article class="explain-block"><span class="explain-index" aria-hidden="true">01</span><div><h3>No forms, no advertising trackers</h3><p>This website does not ask you to submit health information, has no contact forms, and does not load advertising or social-media tracking scripts. Fonts and images are served from the practice’s own website rather than third-party font services.</p></div></article>
        <article class="explain-block"><span class="explain-index" aria-hidden="true">02</span><div><h3>The “Ask Raina” assistant</h3><p>The assistant answers general practice questions — hours, location, services, membership and scheduling — from a fixed list of approved answers. Your typed question is matched in your browser and is not sent to the practice or to any artificial-intelligence service. If the practice turns on optional answer rewording, only the name of the matched topic (for example “hours”) is sent, never your words. The assistant cannot see records, book appointments or give medical advice. Please do not type names, symptoms or other personal details.</p></div></article>
        <article class="explain-block"><span class="explain-index" aria-hidden="true">03</span><div><h3>Links to other services</h3><p>Directions open Google Maps, reviews open Google, and online scheduling — when available — opens the practice’s secure scheduling provider. Those services have their own privacy terms, which apply once you leave this website.</p></div></article>
        <article class="explain-block"><span class="explain-index" aria-hidden="true">04</span><div><h3>Server and security records</h3><p>Like most websites, the hosting service may keep routine technical logs (such as IP address, browser type and pages requested) to keep the site secure and working. Cookies are used only for the website’s administrators when they sign in.</p></div></article>
        <article class="explain-block"><span class="explain-index" aria-hidden="true">05</span><div><h3>Your dental records</h3><p>Information you share with the practice as a patient is handled under the practice’s Notice of Privacy Practices, which you can request from the front desk. To discuss records or private questions, call <a href="tel:+16303814021">(630) 381-4021</a>.</p></div></article>
      </div>
    </section>
  </main>
<?php require dirname(__DIR__, 2) . '/partials/bottom.php';
