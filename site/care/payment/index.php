<?php defined('ABSPATH') || exit;
$page = [
    'title' => 'Insurance, Payment & Financing | Raina Dental Care',
    'description' => 'How dental insurance, out-of-network benefits, estimates, payment options and in-house membership work at Raina Dental Care in Naperville.',
    'path' => '/care/payment/',
    'crumbs' => [['Home', '/'], ['Insurance & payment', '/care/payment/']],
];
require dirname(__DIR__, 2) . '/partials/top.php';
?>
  <main class="detail-main refined-utility" id="main" tabindex="-1">
    <div class="detail-hero"><div class="wrap detail-hero-inner"><nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span aria-hidden="true">/</span><span aria-current="page">Insurance &amp; payment</span></nav><p class="eyebrow">Clear before you arrive</p><h1>Insurance &amp; payment</h1><p class="detail-lead">Costs should never be a surprise. Here is how dental benefits, estimates and payment work, so you can make decisions with the full picture.</p></div></div>
    <section class="wrap editorial-single" aria-labelledby="payment-title">
      <div class="section-intro-narrow"><p class="eyebrow">How it works</p><h2 id="payment-title">Plain answers about cost.</h2><p class="intro-large">Dental plans differ widely in what they cover, how much and when. Your benefits — not the practice — decide what a plan pays.</p></div>
      <div class="explain-list">
        <article class="explain-block"><span class="explain-index" aria-hidden="true">01</span><div><h3>Insurance, in and out of network</h3><p>An in-network dentist has a contract with your insurer and agreed fees. An out-of-network dentist does not; many PPO plans still pay a share of out-of-network care, sometimes at a different rate. The team can tell you how your particular plan is handled at Raina Dental Care and whether claims are filed for you.</p></div></article>
        <article class="explain-block"><span class="explain-index" aria-hidden="true">02</span><div><h3>Estimates before treatment</h3><p>For larger treatment, a written estimate shows the fee and what your plan is expected to pay. An estimate is not a guarantee: annual maximums, waiting periods, frequency limits and plan decisions can change the final amount. If your plan offers a pre-treatment estimate, it can be requested before you commit.</p></div></article>
        <article class="explain-block"><span class="explain-index" aria-hidden="true">03</span><div><h3>Paying for care</h3><p>The practice’s published payment options are Visa, Mastercard, American Express and Discover, plus patient financing through CareCredit. Financing is offered by the lender, subject to its approval and terms; ask about it before treatment begins</p></div></article>
        <article class="explain-block"><span class="explain-index" aria-hidden="true">04</span><div><h3>No insurance? Consider membership</h3><p>Our in-house membership plans cover routine preventive visits for a set monthly or annual fee. Membership is not insurance and does not pay claims; it is an agreement with the practice. <a href="/care/membership/">Compare the adult and child plans</a>.</p></div></article>
      </div>
      <div class="editorial-faq"><p class="eyebrow">Before your visit</p><h2>Questions worth asking your plan.</h2><ul class="refined-list"><li>Does my plan pay for out-of-network dental care, and at what percentage?</li><li>How much of my annual maximum is left, and when does it reset?</li><li>Are there waiting periods or frequency limits on cleanings, X-rays or crowns?</li><li>Do I need a pre-treatment estimate for larger work?</li></ul></div>
      <p class="micro-copy">Coverage information on this page is general. Your plan documents and the practice’s billing team give the final answer for your situation.</p>
      <div class="hero-actions"><a class="button" href="tel:+16303814021"><svg class="icon" aria-hidden="true"><use href="#i-phone"/></svg> Call about your plan</a><a class="text-link" href="/care/membership/">Membership plans <svg class="icon" aria-hidden="true"><use href="#i-arrow"/></svg></a></div>
    </section>
  </main>
<?php require dirname(__DIR__, 2) . '/partials/bottom.php';
