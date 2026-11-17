<?php
$industries = json_decode(file_get_contents(__DIR__ . '/industry-pages.json'), true, 512, JSON_THROW_ON_ERROR);
$industry = $industries[$industryId];
$pageTitle = $industry['title'];
$pageDescription = $industry['description'];
$hasAppScreenshots = true;
$escape = static fn($value) => htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
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

  <section class="section-padding industry-example" aria-labelledby="industry-flow-title">
    <div class="container px-4 px-lg-5">
      <div class="section-title mb-4">
        <h2 id="industry-flow-title"><?= $escape($industry['flowTitle']) ?></h2>
        <p><?= $escape($industry['exampleIntro']) ?></p>
      </div>
      <?php
      $carouselId = 'industry-panels';
      $carouselLabel = $industry['name'] . ' example order, from booking to collection';
      $previewPanels = $industry['sequence'];
      include __DIR__ . '/screenshot-carousel.php';
      ?>
      <p class="how-features-link text-center mt-3 mb-0"><a href="/how-it-works">Booking and collection guides</a></p>
    </div>
  </section>

  <section class="section-padding pt-4" aria-labelledby="industry-features-title">
    <div class="container px-4 px-lg-5">
      <div class="section-title mb-4">
        <h2 id="industry-features-title"><?= $escape($industry['featuresTitle']) ?></h2>
        <p><?= $escape($industry['featuresIntro']) ?></p>
      </div>
      <div class="row g-3 g-lg-4">
        <?php foreach ($industry['features'] as $feature): ?>
          <div class="col-md-6 col-xl-4">
            <div class="how-basic-card h-100 d-flex flex-column">
              <div class="feature-icon mb-3"><i class="bi bi-<?= $escape($feature['icon']) ?>" aria-hidden="true"></i></div>
              <h3><?= $escape($feature['title']) ?></h3>
              <p><?= $escape($feature['text']) ?></p>
              <a class="how-guide-link mt-auto" href="/<?= $escape($feature['guide']) ?>">View guide<span class="visually-hidden">: <?= $escape($feature['title']) ?></span><i class="bi bi-arrow-right" aria-hidden="true"></i></a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <p class="how-features-link text-center mt-4 mb-0"><a href="/features">See all RepairPOS features</a></p>
    </div>
  </section>

  <section class="pb-5">
    <div class="container px-4 px-lg-5">
      <div class="cta-bar d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-4">
        <div><h2><?= $escape($industry['ctaTitle']) ?></h2><p><?= $escape($industry['ctaText']) ?></p></div>
        <a class="btn btn-primary btn-lg flex-shrink-0" href="/contact">Book a Demo</a>
      </div>
    </div>
  </section>
</main>
<?php include __DIR__ . '/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="/js/screenshot-carousel.js"></script>
</body>
</html>
