<?php defined('ABSPATH') || exit;
$page = [
    'title' => 'Patient Reviews & Stories | Raina Dental Care',
    'description' => 'What patients say about visiting Raina Dental Care — excerpts from public Google reviews, with a link to read every review at the source.',
    'path' => '/care/patient-stories/',
    'crumbs' => [['Home', '/'], ['Patient stories', '/care/patient-stories/']],
];
require dirname(__DIR__, 2) . '/partials/top.php';
$reviews = [
    ['I have been looking for a dentist that provides holistic dentistry in the area, and love the care Dr. Raina provides. She is very knowledgeable, caring, thorough and gentle.', 'Catherine M.'],
    ['Great first impression. Dental office is clean and welcoming. Both dentist and dental assistant were very nice and knowledgeable.', 'Darmella R.'],
    ['During my consultation visit I was extremely impressed by Dr. Raina’s knowledge of not only holistic dentistry, but also her overall knowledge of natural health and healing.', 'Tom P.'],
    ['I was there for an extraction, but her cheerful personality, and funny stories had me laughing, quite the opposite of a day at the dentist.', 'Sabrina B.'],
    ['… they constantly had suction on and they were very nice, they talked to me through the whole procedure!', 'Felipe R.'],
    ['Staff was very friendly and really love their way of reminding and completing important paperwork through the messages … Very peaceful and quiet environment.', 'Fatema M.'],
    ['I have been a patient of Dr. Raina for approximately 10 years.', 'Aquila S.'],
];
?>
  <main class="detail-main refined-utility" id="main" tabindex="-1">
    <div class="detail-hero"><div class="wrap detail-hero-inner"><nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span aria-hidden="true">/</span><span aria-current="page">Patient stories</span></nav><p class="eyebrow">Patient experiences</p><h1>In our patients’ words</h1><p class="detail-lead">What people remember about a dental visit is rarely the procedure. It is being listened to, having things explained and feeling at ease. Read what patients have shared, and every review in full at its source.</p></div></div>
    <section class="wrap reviews-content" aria-labelledby="reviews-title">
      <div class="section-intro-narrow"><p class="eyebrow">Shared publicly</p><h2 id="reviews-title">The details people remember.</h2><p>Every patient’s experience is their own. Excerpts below are quoted word for word from public Google reviews, shortened where marked; they describe personal experiences, not promised results.</p></div>
      <div data-review-approval>
        <p class="approval-note" data-review-pending>Staging only: these excerpts are hidden in public-launch mode until the practice confirms each quotation, the reviewer’s display name and its right to republish.</p>
        <div class="reviews-grid">
<?php foreach ($reviews as [$quote, $name]) : ?>
          <figure class="review-card"><span class="review-mark" aria-hidden="true">“</span><blockquote><p><?php echo raina_e($quote); ?></p></blockquote><figcaption><strong><?php echo raina_e($name); ?></strong><span>Google review</span></figcaption></figure>
<?php endforeach; ?>
        </div>
      <!-- /review-approval --></div>
      <div class="review-action"><a class="button" href="https://www.google.com/maps/search/?api=1&amp;query=Raina+Dental+Care+2323+Naperville+Road+Naperville+IL" target="_blank" rel="noopener noreferrer">Read all reviews on Google<span class="sr-only"> (opens in a new tab)</span> <svg aria-hidden="true" class="icon"><use href="#i-out"/></svg></a><a class="text-link" href="/care/team/">Meet the dentists <svg aria-hidden="true" class="icon"><use href="#i-arrow"/></svg></a></div>
    </section>
    <section class="end-cta"><div class="wrap"><p class="eyebrow">Raina Dental Care</p><h2>Experience it for yourself.</h2><p>New patients are welcome. Tell us what matters to you when you call.</p><div class="hero-actions"><a class="button" href="/care/appointments/" data-booking-cta>Schedule a visit <svg aria-hidden="true" class="icon"><use href="#i-arrow"/></svg></a><a class="text-link" href="tel:+16303814021">Call (630) 381-4021 <svg aria-hidden="true" class="icon"><use href="#i-arrow"/></svg></a></div></div></section>
  </main>
<?php require dirname(__DIR__, 2) . '/partials/bottom.php';
