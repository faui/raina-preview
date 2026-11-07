<?php defined('ABSPATH') || exit;
$page = [
    'title' => 'Schedule a Visit | Raina Dental Care, Naperville',
    'description' => 'Schedule a dental visit at Raina Dental Care in Naperville. Call (630) 381-4021 — new patients, returning patients and urgent dental problems.',
    'path' => '/care/appointments/',
    'crumbs' => [['Home', '/'], ['Schedule a visit', '/care/appointments/']],
];
require dirname(__DIR__, 2) . '/partials/top.php';
?>
  <main class="detail-main refined-utility booking-page" id="main" tabindex="-1">
    <div class="detail-hero"><div class="wrap detail-hero-inner"><nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span aria-hidden="true">/</span><span aria-current="page">Schedule a visit</span></nav><p class="eyebrow">A thoughtful beginning</p><h1>Schedule your visit</h1><p class="detail-lead">Whether you are new to Raina Dental Care or returning, the team will help you choose the right appointment, find a time and tell you what to bring.</p></div></div>
    <section class="wrap booking-layout" aria-labelledby="booking-title">
      <div class="booking-primary">
        <p class="eyebrow">Book your appointment</p><h2 id="booking-title">Choose a time with our team.</h2>
        <div class="booking-scheduler">
          <!-- RAINA_BOOKING -->
          <!-- RAINA_BOOKING_FALLBACK --><div class="booking-call" data-booking-fallback>
            <p class="booking-call-label">Call to schedule</p>
            <a class="booking-call-number" href="tel:+16303814021">(630) 381-4021</a>
            <p>Appointments are arranged by phone during office hours: Monday noon–6 pm; Tuesday, Thursday and Friday 9 am–5 pm; closed Wednesday. If you reach voicemail, leave a first name and a number — please don’t leave health details in a message.</p>
            <div class="appointment-actions"><a class="button" href="tel:+16303814021"><svg class="icon" aria-hidden="true"><use href="#i-phone"/></svg> Call the practice</a><a class="text-link" href="/care/contact/">Hours, directions &amp; parking <svg class="icon" aria-hidden="true"><use href="#i-arrow"/></svg></a></div>
          </div><!-- /RAINA_BOOKING_FALLBACK -->
        </div>
        <p class="booking-provider-note">Online scheduling, when available, opens on the practice’s secure scheduling provider, which has its own privacy terms. Medical history is collected only through the practice’s secure intake — never through this website or its assistant.</p>
        <div class="booking-paths">
          <article><h3>New patients</h3><p>Your first visit is a conversation and a thorough exam. Mention any worries, a specific concern or a treatment you are curious about so the right amount of time is reserved.</p></article>
          <article><h3>Returning patients</h3><p>Call to book your next cleaning or follow-up, or to change an existing appointment. Please give as much notice as you can if you need to reschedule.</p></article>
          <article><h3>Something hurts?</h3><p>Call rather than waiting for an online slot. The team will ask what happened and advise on timing. <a href="/care/emergency/">Dental emergencies</a></p></article>
        </div>
      </div>
      <aside class="booking-aside" aria-labelledby="first-visit-title">
        <p class="eyebrow">Your first visit</p><h3 id="first-visit-title">What happens next?</h3>
        <ol class="simple-numbered">
          <li><strong>We talk.</strong><p>Your health history, medications, past dental experiences and what you want from your care.</p></li>
          <li><strong>We examine.</strong><p>A full exam of teeth, gums and soft tissues, with only the X-rays your history and findings call for.</p></li>
          <li><strong>We plan together.</strong><p>We show you what we found and explain your options. Nothing is started without your agreement.</p></li>
        </ol>
        <h4>Please bring</h4>
        <ul class="bring-list"><li>Photo ID and your dental insurance card, if you have one</li><li>A list of current medications and supplements</li><li>Recent dental X-rays, if you have them</li></ul>
        <a class="text-link" href="/care/payment/">Insurance &amp; payment <svg class="icon" aria-hidden="true"><use href="#i-arrow"/></svg></a>
        <a class="text-link" href="/care/membership/">No insurance? See membership plans <svg class="icon" aria-hidden="true"><use href="#i-arrow"/></svg></a>
      </aside>
    </section>
    <section class="wrap urgent-note" aria-labelledby="urgent-title"><div><p class="eyebrow">Urgent dental problem?</p><h2 id="urgent-title">Please call us first.</h2><p>For severe pain, swelling, a broken tooth or a knocked-out tooth, call the office rather than requesting a time online. If swelling affects breathing or swallowing, or bleeding won’t stop, call 911.</p></div><a class="button" href="tel:+16303814021"><svg class="icon" aria-hidden="true"><use href="#i-phone"/></svg> Call (630) 381-4021</a></section>
  </main>
<?php require dirname(__DIR__, 2) . '/partials/bottom.php';
