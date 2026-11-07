<?php defined('ABSPATH') || exit;
$page = [
    'title' => 'In-House Dental Membership Plans | Raina Dental Care',
    'description' => 'Compare Raina Dental Care’s Standard Adult Plan and Child Wellness Plan (12 and under): published prices and included preventive care. Not insurance.',
    'path' => '/care/membership/',
    'crumbs' => [['Home', '/'], ['Membership', '/care/membership/']],
];
require dirname(__DIR__, 2) . '/partials/top.php';
?>
  <main class="detail-main refined-utility" id="main" tabindex="-1">
    <div class="detail-hero"><div class="wrap detail-hero-inner"><nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span aria-hidden="true">/</span><span aria-current="page">Membership</span></nav><p class="eyebrow">Prevention with a plan</p><h1>In-house membership</h1><p class="detail-lead">No dental insurance? Two in-house plans cover routine preventive care for a set fee, paid monthly or once a year, directly with the practice.</p></div></div>
    <section class="wrap membership-refined" aria-labelledby="plans-title">
      <div class="section-intro-narrow"><p class="eyebrow">Compare plans</p><h2 id="plans-title">Two plans, side by side.</h2><p>Each plan bundles the visits most people need to stay ahead of problems: regular cleanings, exams, screening and one emergency exam each year.</p></div>
      <div class="membership-grid">
        <article class="membership-plan" aria-labelledby="adult-plan"><p class="eyebrow">Adults</p><h3 id="adult-plan">Standard Adult Plan</h3><p class="membership-price">$62.50 <span>/ month</span></p><p class="membership-annual">or $750 per year</p><h4>Included each year</h4><ul><li>Basic cleaning every six months</li><li>Oral cancer screening</li><li>One to two exams</li><li>X-rays as needed</li><li>One emergency exam with X-ray</li><li>Teledentistry appointments</li></ul></article>
        <article class="membership-plan" aria-labelledby="child-plan"><p class="eyebrow">Children 12 and under</p><h3 id="child-plan">Child Wellness Plan</h3><p class="membership-price">$43.33 <span>/ month</span></p><p class="membership-annual">or $520 per year</p><h4>Included each year</h4><ul><li>Routine cleaning every six months</li><li>Oral cancer screening</li><li>One set of routine X-rays</li><li>One emergency exam with X-ray</li><li>A separate member fee schedule for other treatment</li></ul></article>
      </div>
      <p class="micro-copy">Prices are as published by the practice. The monthly child fee is shown as published and rounded to the cent; twelve monthly payments of $43.33 total $519.96.</p>
      <div class="membership-terms">
        <div><h3>Membership is not insurance</h3><p>Plans are an agreement with Raina Dental Care, not an insurance policy. They do not pay claims, cannot be used at other practices and are not a substitute for medical or dental insurance.</p></div>
        <div><h3>Before you enroll</h3><p>The team will go through the current terms with you — how billing and renewal work, what is excluded, and how cancellation is handled — so you know exactly what you are signing up for.</p></div>
      </div>
      <div class="hero-actions"><a class="button" href="tel:+16303814021"><svg class="icon" aria-hidden="true"><use href="#i-phone"/></svg> Call to enroll</a><a class="text-link" href="/care/payment/">Insurance &amp; payment <svg aria-hidden="true" class="icon"><use href="#i-arrow"/></svg></a><a class="text-link" href="/care/exams/">What a preventive visit includes <svg aria-hidden="true" class="icon"><use href="#i-arrow"/></svg></a></div>
    </section>
  </main>
<?php require dirname(__DIR__, 2) . '/partials/bottom.php';
