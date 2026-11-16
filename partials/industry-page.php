<?php
$industries = json_decode(file_get_contents(__DIR__ . '/industry-pages.json'), true, 512, JSON_THROW_ON_ERROR);
$industry = $industries[$industryId];
$pageTitle = $industry['title'];
$pageDescription = $industry['description'];
$hasAppScreenshots = true;
$escape = static fn($value) => htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
$screenshot = '/assets/images/app/' . $industry['image'];
[$screenWidth, $screenHeight] = getimagesize(dirname(__DIR__) . $screenshot);
$tools = [
    ['camera', 'Photos & item notes', $industry['tools'][0], 'repair-photos'],
    [$industryId === 'dry-cleaning' ? 'tags' : 'box-seam', $industryId === 'dry-cleaning' ? 'Services & prices' : 'Parts & materials', $industry['tools'][1], $industryId === 'dry-cleaning' ? 'products-and-stock' : 'parts-and-materials'],
    ['people', 'Staff & instructions', $industry['tools'][2], 'staff-and-workshop'],
    ['credit-card', 'Deposits & balances', 'Take a deposit, full payment or the remaining balance, and provide a receipt from the order.', 'quotes-and-payments'],
    ['chat-dots', 'Customer updates', 'Send email or SMS updates from the order so the customer knows when to collect.', 'customer-updates'],
    ['bar-chart', 'Sales & reporting', 'Review sales and payments alongside day-to-day workshop activity.', 'reports'],
];
?>
<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/head.php'; ?>
<body>
<?php include __DIR__ . '/header.php'; ?>
<main class="industry-page">
  <section class="contact-banner <?= $escape($industry['hero']) ?>">
    <div class="hero-overlay"></div>
    <div class="container px-4 px-lg-5 position-relative">
      <div class="contact-banner-content">
        <div class="eyebrow"><?= $escape($industry['name']) ?> software</div>
        <h1><?= $escape($industry['headline']) ?></h1>
        <p><?= $escape($industry['intro']) ?></p>
        <a href="/contact" class="btn btn-primary btn-lg mt-4">Book a Demo</a>
      </div>
    </div>
  </section>

  <section class="section-padding" aria-labelledby="industry-items-title">
    <div class="container px-4 px-lg-5">
      <div class="row align-items-center g-4 g-lg-5">
        <div class="col-lg-7">
          <figure class="how-screen mb-0 industry-screen">
            <button type="button" class="app-screenshot-trigger" data-bs-toggle="modal" data-bs-target="#appScreenshotPreview" data-screen="<?= $escape($screenshot) ?>" data-title="<?= $escape($industry['name']) ?> item tracking" data-alt="RepairPOS sample order: <?= $escape($industry['items'][0][0]) ?> ready and <?= $escape($industry['items'][1][0]) ?> working" aria-label="Enlarge <?= $escape(strtolower($industry['name'])) ?> screenshot">
              <img src="<?= $escape($screenshot) ?>" class="app-screenshot" width="<?= $screenWidth ?>" height="<?= $screenHeight ?>" alt="RepairPOS sample order: <?= $escape($industry['items'][0][0]) ?> ready and <?= $escape($industry['items'][1][0]) ?> working" loading="lazy" decoding="async">
            </button>
            <figcaption>Sample <?= $escape(strtolower($industry['name'])) ?> order <span><i class="bi bi-arrows-fullscreen" aria-hidden="true"></i> Enlarge</span></figcaption>
          </figure>
        </div>
        <div class="col-lg-5">
          <div class="eyebrow mb-2">Built for <?= $escape($industry['audience']) ?></div>
          <h2 id="industry-items-title">Track <?= $escape($industry['plural']) ?>. Not just orders.</h2>
          <p class="text-muted-custom mt-3"><?= $escape($industry['pain']) ?> <?= $escape($industry['answer']) ?></p>
          <ul class="check-list mb-3">
            <?php foreach ($industry['details'] as $detail): ?>
              <li><i class="bi bi-check-circle" aria-hidden="true"></i><?= $escape($detail) ?></li>
            <?php endforeach; ?>
          </ul>
          <a class="how-guide-link" href="/item-tracking">See how item tracking works <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </section>

  <section class="section-padding pt-0" aria-labelledby="industry-flow-title">
    <div class="container px-4 px-lg-5">
      <div class="section-title mb-4">
        <h2 id="industry-flow-title"><?= $escape($industry['name']) ?>, from booking to collection</h2>
        <p>One customer order. A clear record for every <?= $escape($industry['noun']) ?>.</p>
      </div>
      <ol class="row g-3 g-lg-4 list-unstyled mb-0">
        <?php foreach ($industry['steps'] as $index => $step): ?>
          <li class="col-md-6 col-xl-4">
            <div class="how-basic-card h-100 d-flex flex-column">
              <div class="d-flex align-items-center gap-3 mb-3">
                <span class="workflow-number" aria-hidden="true"><?= $index + 1 ?></span>
                <h3 class="mb-0"><?= $escape($step['title']) ?></h3>
              </div>
              <p><?= $escape($step['text']) ?></p>
              <a href="/<?= $escape($step['link']) ?>" class="how-guide-link mt-auto">View guide <span class="visually-hidden">: <?= $escape($step['title']) ?></span><i class="bi bi-arrow-right" aria-hidden="true"></i></a>
            </div>
          </li>
        <?php endforeach; ?>
      </ol>
    </div>
  </section>

  <section class="section-padding pt-0" aria-labelledby="industry-tools-title">
    <div class="container px-4 px-lg-5">
      <div class="section-title mb-4">
        <h2 id="industry-tools-title">The counter and workshop, connected</h2>
        <p>Everyday POS tools with the item detail a <?= $escape($industryId === 'dry-cleaning' ? 'garment care' : strtolower($industry['name'])) ?> business needs.</p>
      </div>
      <div class="row g-3 g-lg-4">
        <?php foreach ($tools as [$icon, $title, $description, $link]): ?>
          <div class="col-md-6 col-xl-4">
            <div class="how-basic-card h-100">
              <div class="feature-icon mb-3"><i class="bi bi-<?= $escape($icon) ?>" aria-hidden="true"></i></div>
              <h3><?= $escape($title) ?></h3>
              <p><?= $escape($description) ?></p>
              <a class="how-guide-link" href="/<?= $escape($link) ?>"><?= $escape($title) ?> guide <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <p class="how-features-link text-center mt-4 mb-0">See <a href="/features">all features and integrations</a> or follow the <a href="/how-it-works">full RepairPOS workflow</a>.</p>
    </div>
  </section>

  <section class="pb-5">
    <div class="container px-4 px-lg-5">
      <div class="cta-bar d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-4">
        <div><h2>See RepairPOS for your <?= $escape($industryId === 'dry-cleaning' ? 'dry cleaning shop' : strtolower($industry['name']) . ' business') ?></h2><p>Book a demo and walk through your day-to-day workflow.</p></div>
        <a class="btn btn-primary btn-lg flex-shrink-0" href="/contact">Book a Demo</a>
      </div>
    </div>
  </section>
</main>
<?php include __DIR__ . '/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
