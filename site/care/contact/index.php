<?php defined('ABSPATH') || exit;
$page = [
    'title' => 'Contact & Directions | Raina Dental Care, Naperville',
    'description' => 'Raina Dental Care, 2323 Naperville Road, Suite 110, Naperville, IL 60563. Phone (630) 381-4021, office hours, directions and how to reach the team.',
    'path' => '/care/contact/',
    'schema' => true,
    'crumbs' => [['Home', '/'], ['Contact & directions', '/care/contact/']],
];
require dirname(__DIR__, 2) . '/partials/top.php';
?>
  <main class="detail-main refined-utility" id="main" tabindex="-1">
    <div class="detail-hero"><div class="wrap detail-hero-inner"><nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span aria-hidden="true">/</span><span aria-current="page">Contact &amp; directions</span></nav><p class="eyebrow">Find us in Naperville</p><h1>Visit Raina Dental Care</h1><p class="detail-lead">Everything you need to reach us: where we are, when we are open and the quickest way to talk to the team.</p></div></div>
    <section class="wrap contact-layout" aria-label="Location and hours">
      <div class="contact-feature">
        <p class="eyebrow">Our location</p><h2>2323 Naperville Road.</h2>
        <address>Raina Dental Care<br><?php echo raina_e($practice['street']); ?>, <?php echo raina_e($practice['suite']); ?><br><?php echo raina_e($practice['city'] . ', ' . $practice['region'] . ' ' . $practice['postal']); ?></address>
        <div class="hero-actions"><a class="button" target="_blank" rel="noopener noreferrer" href="<?php echo raina_e($practice['directions']); ?>">Get directions<span class="sr-only"> (opens Google Maps in a new tab)</span> <svg class="icon" aria-hidden="true"><use href="#i-out"/></svg></a><a class="text-link" href="tel:<?php echo raina_e($practice['phone_tel']); ?>"><svg class="icon" aria-hidden="true"><use href="#i-phone"/></svg> <?php echo raina_e($practice['phone_display']); ?></a></div>
        <p class="micro-copy">We are in Suite 110. If you need step-free access, help from the car or other arrangements, please mention it when you schedule.</p>
      </div>
      <div class="contact-hours">
        <p class="eyebrow">Office hours</p><h2>When we’re open.</h2>
        <dl class="hours-grid">
<?php foreach ($practice['hours'] as [$day, $time]) : ?>
          <div><dt><?php echo raina_e($day); ?></dt><dd><?php echo raina_e($time); ?></dd></div>
<?php endforeach; ?>
        </dl>
        <p class="micro-copy">Holiday hours may differ. Please call ahead if you are unsure.</p>
      </div>
    </section>
    <section class="wrap contact-ways" aria-labelledby="ways-title">
      <h2 id="ways-title" class="sr-only">Ways to reach us</h2>
      <article><p class="eyebrow">Book or change a visit</p><h3>Schedule by phone</h3><p>Call during office hours to book, reschedule or cancel. New patients are welcome.</p><a class="text-link" href="/care/appointments/" data-booking-cta>Scheduling details <svg class="icon" aria-hidden="true"><use href="#i-arrow"/></svg></a></article>
      <article class="contact-urgent"><p class="eyebrow">Something hurts?</p><h3>Dental emergencies</h3><p>Call the office first. For swelling that affects breathing or swallowing, uncontrolled bleeding or a serious injury, call 911.</p><a class="text-link" href="/care/emergency/">What to do now <svg class="icon" aria-hidden="true"><use href="#i-arrow"/></svg></a></article>
      <article><p class="eyebrow">Costs</p><h3>Insurance &amp; payment</h3><p>How benefits, estimates, payment and in-house membership work before your visit.</p><a class="text-link" href="/care/payment/">Insurance &amp; payment <svg class="icon" aria-hidden="true"><use href="#i-arrow"/></svg></a></article>
    </section>
    <section class="wrap contact-privacy"><p class="micro-copy">For your privacy, please don’t send health information through social media, website chat or voicemail. The team will tell you how to share records securely.</p></section>
  </main>
<?php require dirname(__DIR__, 2) . '/partials/bottom.php';
