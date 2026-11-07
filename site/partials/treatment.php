<?php
/**
 * Shared treatment page renderer. Each /care/{slug}/index.php sets $slug and requires this file.
 * Content lives in site/data/treatments.php (practice-approval notes are kept there, never rendered).
 *
 * Markup contract relied on by functions.php raina_listing_page() (WordPress editor overrides):
 *  - `<h1>…</h1><p class="detail-lead">…</p>` must stay adjacent with no attributes on <h1>;
 *  - the first `<section class="editorial-intro"` … `</section>` must not contain a nested section.
 */
defined('ABSPATH') || exit;
$treatments = json_decode(require dirname(__DIR__) . '/data/treatments.php', true);
$t = $treatments[$slug];
$layout = $t['layout'] ?? 'standard';
$e = static fn($v) => htmlspecialchars((string) $v, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$page = [
    'title' => $t['doc_title'] . ' | Raina Dental Care',
    'description' => $t['meta'],
    'path' => '/care/' . $slug . '/',
    'crumbs' => [['Home', '/'], ['Treatments', '/care/'], [$t['h1'], '/care/' . $slug . '/']],
];
require __DIR__ . '/top.php';
$heroClass = ['urgent' => ' detail-hero--urgent', 'signature' => ' detail-hero--signature'][$layout] ?? '';
$toc = [['overview', $t['overview']['heading']]];
foreach (['considered' => 'considered', 'compare' => 'compare', 'steps' => 'steps', 'expect' => 'expect', 'considerations' => 'considerations'] as $key => $id) {
    if (!empty($t[$key])) {
        $toc[] = [$id, $t[$key]['heading']];
    }
}
$toc[] = ['questions', 'Common questions'];
$callout = static function () use ($t, $e, $layout) {
    if (empty($t['callout'])) {
        return;
    }
    $urgent = $layout === 'urgent' || stripos($t['callout']['heading'] . $t['callout']['text'], '911') !== false;
    ?>
        <section class="callout<?php echo $urgent ? ' callout-urgent' : ''; ?>" aria-labelledby="callout-title">
          <p class="eyebrow"><?php if ($urgent) : ?><svg class="icon" aria-hidden="true"><use href="#i-alert"/></svg> Important<?php else : ?>Good to know<?php endif; ?></p>
          <h2 id="callout-title"><?php echo $e($t['callout']['heading']); ?></h2>
          <p><?php echo $e($t['callout']['text']); ?></p>
          <?php if ($layout === 'urgent') : ?><div class="callout-actions"><a class="button button-alert" href="tel:911">Call 911</a><a class="text-link" href="tel:+16303814021">Call the practice: (630) 381-4021</a></div><?php endif; ?>
        </section>
    <?php
};
?>
  <main class="detail-main treatment-page treatment-<?php echo $e($layout); ?>" id="main" tabindex="-1">
    <div class="detail-hero<?php echo $heroClass; ?>"><div class="wrap detail-hero-inner">
      <nav class="breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a><span aria-hidden="true">/</span><a href="/care/">Treatments</a><span aria-hidden="true">/</span><span aria-current="page"><?php echo $e($t['h1']); ?></span></nav>
      <p class="eyebrow"><?php echo $e($t['group']); ?></p>
      <h1><?php echo $e($t['h1']); ?></h1><p class="detail-lead"><?php echo $e($t['lead']); ?></p>
<?php if ($layout === 'urgent') : ?>
      <div class="urgent-hero-call"><a class="button" href="tel:+16303814021"><svg class="icon" aria-hidden="true"><use href="#i-phone"/></svg> Call (630) 381-4021</a><a class="text-link" href="/care/contact/">Hours &amp; directions <svg class="icon" aria-hidden="true"><use href="#i-arrow"/></svg></a></div>
      <p class="urgent-hero-hours">Office hours: Mon noon–6 pm · Tue, Thu, Fri 9 am–5 pm · Wed closed. Life-threatening emergency? Call 911.</p>
<?php else : ?>
      <div class="detail-hero-actions"><a class="button" href="/care/appointments/" data-booking-cta>Schedule a visit <svg class="icon" aria-hidden="true"><use href="#i-arrow"/></svg></a><a class="text-link" href="tel:+16303814021">Call (630) 381-4021 <svg class="icon" aria-hidden="true"><use href="#i-arrow"/></svg></a></div>
<?php endif; ?>
    </div></div>
    <div class="wrap editorial-layout">
      <div class="editorial-body">
        <section class="editorial-intro" aria-labelledby="overview"><p class="eyebrow">Overview</p><h2 id="overview"><?php echo $e($t['overview']['heading']); ?></h2><p class="intro-large"><?php echo $e($t['overview']['lead']); ?></p><?php foreach ($t['overview']['paras'] as $para) : ?><p><?php echo $e($para); ?></p><?php endforeach; ?></section>
<?php if ($layout === 'urgent') { $callout(); } ?>
<?php if (!empty($t['considered'])) : ?>
        <section aria-labelledby="considered"><p class="eyebrow"><?php echo $layout === 'urgent' ? 'Common situations' : 'Is it right for you?'; ?></p><h2 id="considered"><?php echo $e($t['considered']['heading']); ?></h2>
          <ul class="check-list"><?php foreach ($t['considered']['items'] as $item) : ?><li><svg class="icon" aria-hidden="true"><use href="#i-check"/></svg><span><?php echo $e($item); ?></span></li><?php endforeach; ?></ul>
        </section>
<?php endif; ?>
<?php if (!empty($t['compare'])) : $c = $t['compare']; ?>
        <section aria-labelledby="compare"><p class="eyebrow">Compare your options</p><h2 id="compare"><?php echo $e($c['heading']); ?></h2><?php if (!empty($c['intro'])) : ?><p class="compare-intro"><?php echo $e($c['intro']); ?></p><?php endif; ?>
          <div class="compare-wrap" role="region" aria-labelledby="compare" tabindex="0"><table class="compare-table">
            <thead><tr><?php foreach ($c['columns'] as $i => $col) : ?><th scope="col"><?php echo $i === 0 && $col === '' ? '<span class="sr-only">Consideration</span>' : $e($col); ?></th><?php endforeach; ?></tr></thead>
            <tbody><?php foreach ($c['rows'] as $row) : ?><tr><th scope="row"><?php echo $e($row[0]); ?></th><?php foreach (array_slice($row, 1) as $i => $cell) : ?><td data-label="<?php echo $e($c['columns'][$i + 1] ?? ''); ?>"><?php echo $e($cell); ?></td><?php endforeach; ?></tr><?php endforeach; ?></tbody>
          </table></div>
        </section>
<?php endif; ?>
<?php if (!empty($t['steps'])) : ?>
        <section class="journey-section" aria-labelledby="steps"><p class="eyebrow">Step by step</p><h2 id="steps"><?php echo $e($t['steps']['heading']); ?></h2>
          <ol class="journey-list"><?php foreach ($t['steps']['items'] as $i => $step) : ?><li><span class="stage-index" aria-hidden="true"><?php echo sprintf('%02d', $i + 1); ?></span><div><h3><?php echo $e($step['title']); ?></h3><p><?php echo $e($step['text']); ?></p></div></li><?php endforeach; ?></ol>
        </section>
<?php endif; ?>
<?php if (!empty($t['expect'])) : ?>
        <section aria-labelledby="expect"><p class="eyebrow">What to expect</p><h2 id="expect"><?php echo $e($t['expect']['heading']); ?></h2>
          <div class="expect-grid"><?php foreach ($t['expect']['items'] as $item) : ?><div><p class="expect-label"><?php echo $e($item['label']); ?></p><p><?php echo $e($item['text']); ?></p></div><?php endforeach; ?></div>
        </section>
<?php endif; ?>
<?php if (!empty($t['considerations'])) : ?>
        <section class="prose-section" aria-labelledby="considerations"><p class="eyebrow">Considerations</p><h2 id="considerations"><?php echo $e($t['considerations']['heading']); ?></h2><?php foreach ($t['considerations']['paras'] as $para) : ?><p><?php echo $e($para); ?></p><?php endforeach; ?></section>
<?php endif; ?>
<?php if ($layout !== 'urgent') { $callout(); } ?>
        <section class="editorial-faq" aria-labelledby="questions"><p class="eyebrow">Common questions</p><h2 id="questions">Questions about <?php echo $e(preg_match('~^(?:[A-Z]{2}|All-on)~', $t['h1']) ? $t['h1'] : lcfirst($t['h1'])); ?></h2>
          <div class="faq-stack"><?php foreach ($t['faqs'] as $faq) : ?><details><summary><?php echo $e($faq['q']); ?><span aria-hidden="true">+</span></summary><p><?php echo $e($faq['a']); ?></p></details><?php endforeach; ?></div>
        </section>
<?php if (!empty($t['sources'])) : ?>
        <section aria-labelledby="sources"><p class="eyebrow">Further reading</p><h2 id="sources">Independent sources</h2>
          <ul class="sources-list"><?php foreach ($t['sources'] as $src) : ?><li><a href="<?php echo $e($src['url']); ?>" target="_blank" rel="noopener noreferrer"><?php echo $e($src['label']); ?><span class="sr-only"> (opens in a new tab)</span><svg class="icon" aria-hidden="true"><use href="#i-out"/></svg></a></li><?php endforeach; ?></ul>
        </section>
<?php endif; ?>
<?php $related = array_values(array_filter($t['related'] ?? [], static fn($r) => isset($treatments[$r]) || in_array($r, ['membership', 'payment', 'team', 'approach', 'technology'], true))); ?>
<?php if ($related) : ?>
        <section aria-labelledby="related"><p class="eyebrow">Related care</p><h2 id="related">Keep exploring</h2>
          <div class="related-grid"><?php foreach ($related as $r) :
              $info = $treatments[$r] ?? ['h1' => ['membership' => 'In-house membership', 'payment' => 'Insurance & payment', 'team' => 'Meet our dentists', 'approach' => 'Our approach', 'technology' => 'Imaging & technology'][$r], 'group' => 'Practice', 'summary' => ''];
              ?><a class="related-card" data-service="<?php echo $e($r); ?>" href="/care/<?php echo $e($r); ?>/"><span class="eyebrow"><?php echo $e($info['group']); ?></span><strong><?php echo $e($info['h1']); ?></strong><?php if ($info['summary']) : ?><small><?php echo $e($info['summary']); ?></small><?php endif; ?></a><?php endforeach; ?></div>
        </section>
<?php endif; ?>
      </div>
      <aside class="editorial-aside" aria-label="Contact and page navigation">
        <div class="editorial-contact">
<?php if ($layout === 'urgent') : ?>
          <p class="eyebrow">Call first</p><h2>Talk to the team now.</h2><p>Describe what happened and the team will advise you on next steps and timing.</p><a class="button" href="tel:+16303814021">Call (630) 381-4021</a><a class="text-link" href="/care/contact/">Hours &amp; directions <svg class="icon" aria-hidden="true"><use href="#i-arrow"/></svg></a>
<?php else : ?>
          <p class="eyebrow">Plan your visit</p><h2>Start with a conversation.</h2><p>Your first appointment is about understanding your mouth and your priorities before any treatment is decided.</p><a class="button" href="/care/appointments/" data-booking-cta>Schedule a visit <svg class="icon" aria-hidden="true"><use href="#i-arrow"/></svg></a><a class="text-link" href="tel:+16303814021">(630) 381-4021 <svg class="icon" aria-hidden="true"><use href="#i-arrow"/></svg></a>
<?php endif; ?>
        </div>
        <a class="aside-team" href="/care/team/"><img src="/assets/dr-raina.jpg" alt="" width="58" height="58" loading="lazy"><span><strong>Meet your dentists</strong>Dr. Mandeep Raina, DDS, and Dr. Prameela B</span></a>
        <nav class="page-toc" aria-label="On this page"><p>On this page</p><?php foreach ($toc as [$id, $label]) : ?><a href="#<?php echo $e($id); ?>"><?php echo $e($label); ?></a><?php endforeach; ?></nav>
      </aside>
    </div>
  </main>
<?php require __DIR__ . '/bottom.php';
