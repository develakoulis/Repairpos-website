<?php
$carouselEscape = static fn($value) => htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
?>
<div class="workflow-carousel-wrap">
  <button type="button" class="workflow-arrow workflow-prev" aria-label="Previous <?= $carouselEscape($carouselItemType ?? 'step') ?>" aria-controls="<?= $carouselEscape($carouselId) ?>">
    <i class="bi bi-arrow-left" aria-hidden="true"></i>
  </button>
  <div class="workflow-carousel" id="<?= $carouselEscape($carouselId) ?>" role="region" aria-roledescription="carousel" aria-label="<?= $carouselEscape($carouselLabel) ?>" tabindex="0">
    <?php foreach ($previewPanels as $panelIndex => $panel): ?>
      <?php [$panelTitle, $panelDescription, $panelImage] = $panel; ?>
      <?php [$panelWidth, $panelHeight] = getimagesize(dirname(__DIR__) . '/assets/images/app/' . $panelImage); ?>
      <div class="workflow-slide" role="group" aria-label="<?= $carouselEscape(ucfirst($carouselItemType ?? 'step')) ?> <?= $panelIndex + 1 ?> of <?= count($previewPanels) ?>">
        <div class="workflow-card">
          <button type="button" class="app-screenshot-trigger" data-bs-toggle="modal" data-bs-target="#<?= $carouselEscape($carouselModalId ?? 'appScreenshotPreview') ?>" data-screen="/assets/images/app/<?= $carouselEscape($panelImage) ?>" data-title="<?= $carouselEscape($panelTitle) ?>" data-alt="RepairPOS example: <?= $carouselEscape($panelDescription) ?>" aria-label="Enlarge <?= $carouselEscape($panelTitle) ?> screenshot">
            <img src="/assets/images/app/<?= $carouselEscape($panelImage) ?>" class="app-screenshot" alt="RepairPOS example: <?= $carouselEscape($panelDescription) ?>" width="<?= $panelWidth ?>" height="<?= $panelHeight ?>" loading="lazy" decoding="async">
          </button>
          <div class="workflow-content">
            <div class="workflow-header">
              <?php if ($carouselShowNumbers ?? true): ?>
                <div class="workflow-number" aria-hidden="true"><?= $panelIndex + 1 ?></div>
              <?php endif; ?>
              <h3><?= $carouselEscape($panelTitle) ?></h3>
            </div>
            <p><?= $carouselEscape($panelDescription) ?></p>
            <?php if (!empty($panel[3])): ?>
              <a class="how-guide-link mb-0" href="<?= $carouselEscape($panel[3]) ?>"><?= $carouselEscape($panel[4] ?? 'View guide') ?> <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <button type="button" class="workflow-arrow workflow-next" aria-label="Next <?= $carouselEscape($carouselItemType ?? 'step') ?>" aria-controls="<?= $carouselEscape($carouselId) ?>">
    <i class="bi bi-arrow-right" aria-hidden="true"></i>
  </button>
</div>
