<?php
/** Shared footer, assistant launcher and assistant dialog. Requires top.php to have run ($practice, raina_e). */
defined('ABSPATH') || exit;
$practice = $practice ?? require __DIR__ . '/practice.php';
?>
  <footer class="site-footer">
    <div class="wrap footer-grid">
      <div class="footer-brand">
        <p class="footer-name">Raina Dental Care</p>
        <p class="footer-tagline">Biological, whole-person dentistry for adults and children in Naperville, Illinois.</p>
        <address><?php echo raina_e($practice['street']); ?>, <?php echo raina_e($practice['suite']); ?><br><?php echo raina_e($practice['city'] . ', ' . $practice['region'] . ' ' . $practice['postal']); ?></address>
        <p class="footer-contact"><a href="tel:<?php echo raina_e($practice['phone_tel']); ?>"><svg class="icon" aria-hidden="true"><use href="#i-phone"/></svg> <?php echo raina_e($practice['phone_display']); ?></a><a href="<?php echo raina_e($practice['directions']); ?>" target="_blank" rel="noopener noreferrer"><svg class="icon" aria-hidden="true"><use href="#i-pin"/></svg> Get directions<span class="sr-only"> (opens Google Maps in a new tab)</span></a></p>
      </div>
      <div class="footer-hours">
        <p class="footer-heading">Office hours</p>
        <dl>
<?php foreach ($practice['hours'] as [$day, $time]) : ?>
          <div><dt><?php echo raina_e($day); ?></dt><dd><?php echo raina_e($time); ?></dd></div>
<?php endforeach; ?>
        </dl>
        <p class="footer-note">Holiday hours may differ. Please call to confirm.</p>
      </div>
      <nav class="footer-nav" aria-label="Care">
        <p class="footer-heading">Care</p>
        <a href="/care/exams/" data-service="exams">Exams &amp; cleanings</a>
        <a href="/care/emergency/" data-service="emergency">Dental emergencies</a>
        <a href="/care/implants/" data-service="implants">Dental implants</a>
        <a href="/care/smart/" data-service="smart">SMART amalgam removal</a>
        <a href="/care/pediatric/" data-service="pediatric">Children’s dentistry</a>
        <a href="/care/">All treatments</a>
      </nav>
      <nav class="footer-nav" aria-label="Practice">
        <p class="footer-heading">Practice</p>
        <a href="/care/approach/">Our approach</a>
        <a href="/care/team/">Our dentists</a>
        <a href="/care/patient-stories/">Patient stories</a>
        <a href="/care/technology/">Technology</a>
        <a href="/journal/" data-journal-nav>The Raina Journal</a>
      </nav>
      <nav class="footer-nav" aria-label="Patients">
        <p class="footer-heading">Patients</p>
        <a href="/care/appointments/">Schedule a visit</a>
        <a href="/care/membership/">Membership plans</a>
        <a href="/care/payment/">Insurance &amp; payment</a>
        <a href="/care/contact/">Contact &amp; directions</a>
        <a href="/care/privacy/">Website privacy</a>
      </nav>
    </div>
    <div class="wrap footer-base">
      <p>© <?php echo date('Y'); ?> Raina Dental Care. Information on this website is general and does not replace an examination or personal advice from your dentist.</p>
      <a href="<?php echo raina_e($practice['facebook']); ?>" target="_blank" rel="noopener noreferrer">Facebook<span class="sr-only"> (opens in a new tab)</span></a>
    </div>
  </footer>

  <button class="chat-launch" type="button" data-chat aria-haspopup="dialog" aria-controls="chat-dialog"><svg class="icon" aria-hidden="true"><use href="#i-chat"/></svg><span class="chat-launch-label">Ask Raina</span><span class="sr-only"> — practice information assistant</span></button>

  <dialog class="chat-dialog" id="chat-dialog" aria-labelledby="chat-title" aria-describedby="chat-scope">
    <div class="chat-panel">
      <header class="chat-header">
        <span class="chat-mark" aria-hidden="true"><svg class="icon"><use href="#i-spark"/></svg></span>
        <div><h2 id="chat-title">Ask Raina</h2><p id="chat-scope">Hours, location, services and booking. Not medical advice.</p></div>
        <form method="dialog"><button class="close-button" aria-label="Close assistant"><svg class="icon" aria-hidden="true"><use href="#i-close"/></svg></button></form>
      </header>
      <div class="chat-content" id="chat-messages" role="log" aria-label="Conversation" aria-live="polite" tabindex="0">
        <div class="chat-message">Welcome to Raina Dental Care. I can point you to office hours, directions, treatments, membership and scheduling.</div>
      </div>
      <div class="chat-suggestions" role="group" aria-label="Suggested questions">
        <button type="button" data-question="How do I make an appointment?">Scheduling</button>
        <button type="button" data-question="What are your office hours?">Hours</button>
        <button type="button" data-question="What is SMART amalgam removal?">SMART</button>
        <button type="button" data-question="What does membership include?">Membership</button>
      </div>
      <form class="chat-form" id="chat-form">
        <label class="sr-only" for="chat-input">Your question</label>
        <input id="chat-input" placeholder="Ask a practice question…" maxlength="240" autocomplete="off" enterkeyhint="send">
        <button type="submit" aria-label="Send question"><svg class="icon" aria-hidden="true"><use href="#i-send"/></svg></button>
      </form>
      <p class="chat-privacy">Please don’t share personal or health details here. To speak with a person, call <a href="tel:<?php echo raina_e($practice['phone_tel']); ?>"><?php echo raina_e($practice['phone_display']); ?></a>. In an emergency, call 911.</p>
    </div>
  </dialog>
</body>
</html>
