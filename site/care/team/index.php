<?php defined('ABSPATH') || exit;
$page = [
    'title' => 'Meet Our Dentists: Dr. Mandeep Raina & Dr. Prameela B | Raina Dental Care',
    'description' => 'Meet Dr. Mandeep Raina, DDS, and Dr. Prameela B — their training, how they practice, and what to expect if dental visits make you anxious.',
    'path' => '/care/team/',
    'crumbs' => [['Home', '/'], ['Our dentists', '/care/team/']],
];
require dirname(__DIR__, 2) . '/partials/top.php';
?>
  <main class="detail-main refined-utility team-page" id="main" tabindex="-1">
    <div class="detail-hero"><div class="wrap detail-hero-inner"><nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span aria-hidden="true">/</span><span aria-current="page">Our dentists</span></nav><p class="eyebrow">The people behind the care</p><h1>Meet your dentists</h1><p class="detail-lead">Two dentists who share one way of working: listen first, explain clearly and keep prevention at the center of every plan.</p></div></div>

    <section class="wrap team-editorial" aria-label="Dentist profiles">
      <article class="team-profile" aria-labelledby="dr-raina">
        <figure class="team-photo"><img src="/assets/dr-raina.jpg" width="395" height="394" alt="Dr. Mandeep Raina, DDS, smiling in a white clinical coat" loading="eager" decoding="async"></figure>
        <div>
          <p class="eyebrow">Founder · General and biological dentistry</p>
          <h2 id="dr-raina">Dr. Mandeep Raina, DDS</h2>
          <p class="intro-large">Care rooted in empathy, prevention and clear explanation.</p>
          <p>Dr. Raina established Raina Dental Care, where she practices unhurried, preventive dentistry grounded in a real conversation about each patient’s health and preferences. She takes particular care with patients who feel anxious, starting with what worries them before anything clinical begins.</p>
          <p>Her interest in caring for others began early. As a child she was encouraged by her parents to take part in charity work in some of the most underserved areas of India, and she continues to volunteer in her community today.</p>
          <dl class="profile-facts">
            <div><dt>Education</dt><dd>Doctor of Dental Surgery (DDS), New York University, 2002</dd></div>
            <div><dt>Advanced training</dt><dd>Implant rehabilitation and full-mouth reconstruction</dd></div>
            <div><dt>Clinical focus</dt><dd>Preventive and restorative care, implant and full-mouth treatment planning, material-conscious biological dentistry</dd></div>
            <div><dt>Outside the office</dt><dd>Soccer, archery, travel, a good book and music</dd></div>
          </dl>
        </div>
      </article>
      <article class="team-profile team-profile-secondary" aria-labelledby="dr-prameela">
        <div class="portrait-placeholder team-photo" role="img" aria-label="Portrait of Dr. Prameela B to be added after approval"><span aria-hidden="true">P</span><small>Portrait to follow</small></div>
        <div>
          <p class="eyebrow">Dentist · Restorative, cosmetic and family dentistry</p>
          <h2 id="dr-prameela">Dr. Prameela B</h2>
          <p class="intro-large">Gentle, patient-centered care across every stage of life.</p>
          <p>Dr. Prameela provides comprehensive restorative, cosmetic and family dentistry. Her approach is gentle and patient-centered, with an emphasis on prevention, education and minimally invasive treatment — doing what a tooth needs, and no more.</p>
          <p>She favors biocompatible materials and long-term solutions, and makes time to explain options so that patients can make informed decisions with confidence. She has completed extensive continuing education in current treatment and holistic dental care.</p>
          <dl class="profile-facts">
            <div><dt>Clinical focus</dt><dd>Restorative, cosmetic and family dentistry; prevention and minimally invasive care</dd></div>
            <div><dt>Approach</dt><dd>Biocompatible materials, patient comfort and long-term oral health</dd></div>
            <div><dt>Outside the office</dt><dd>Reading, films, gardening, time outdoors and with family</dd></div>
          </dl>
        </div>
      </article>
    </section>

    <section class="team-beliefs" aria-labelledby="beliefs-title"><div class="wrap"><p class="eyebrow">How we practice</p><h2 id="beliefs-title">Human attention. Clinical clarity.</h2><div class="belief-grid">
      <div><span>01</span><h3>Listen first</h3><p>Your first conversation covers your health history, past dental experiences and what you want from your care — before any recommendation is made.</p></div>
      <div><span>02</span><h3>Show, then explain</h3><p>Findings are shown on photographs or X-rays where possible, with the reasonable options, the materials involved and the trade-offs of each, including waiting.</p></div>
      <div><span>03</span><h3>Prevent what we can</h3><p>Daily habits, nutrition and regular maintenance matter as much as treatment. Every plan ends with how to keep the result healthy.</p></div>
    </div></div></section>

    <section class="wrap editorial-single team-anxiety" aria-labelledby="anxiety-title">
      <div class="section-intro-narrow"><p class="eyebrow">If dental visits worry you</p><h2 id="anxiety-title">You set the pace.</h2>
        <p class="intro-large">Many patients arrive after difficult experiences elsewhere. Tell us when you call; it changes how your first visit is planned.</p>
        <p>You can ask for a conversation before any treatment, agree on a signal to pause, and have each step explained before it happens. Where it is clinically appropriate, comfort options can be discussed for longer procedures — see <a href="/care/sedation/">sedation &amp; comfort options</a>.</p>
      </div>
    </section>

    <section class="end-cta"><div class="wrap"><p class="eyebrow">Raina Dental Care</p><h2>Feel at ease from the first hello.</h2><p>New and returning patients are welcome. The team will help you choose the right first appointment.</p><div class="hero-actions"><a class="button" href="/care/appointments/" data-booking-cta>Schedule a visit <svg aria-hidden="true" class="icon"><use href="#i-arrow"/></svg></a><a class="text-link" href="/care/patient-stories/">Read patient stories <svg aria-hidden="true" class="icon"><use href="#i-arrow"/></svg></a></div></div></section>
  </main>
<?php require dirname(__DIR__, 2) . '/partials/bottom.php';
