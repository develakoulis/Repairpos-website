<?php
require __DIR__ . '/repair-guide-data.php';

$guide = $repairGuides[$guideId];
$pageTitle = $guide['title'] . ' | RepairPOS User Guide';
$pageDescription = $guide['intro'];
?>

<!DOCTYPE html>
<html lang="en">

<?php include __DIR__ . '/head.php'; ?>

<body>

<?php include __DIR__ . '/header.php'; ?>

<main class="repair-guide">
  <header class="contact-banner how-hero">
    <div class="container px-4 px-lg-5">
      <nav aria-label="Breadcrumb" class="guide-breadcrumb mb-4">
        <a href="/how-it-works">How it works</a><span aria-hidden="true"> / </span><a href="/repairpos-guides">User guides</a><span aria-hidden="true"> / </span><span aria-current="page"><?= htmlspecialchars($guide['label'], ENT_QUOTES, 'UTF-8') ?></span>
      </nav>
      <div class="eyebrow"><?= $guide['group'] ?></div>
      <h1><?= $guide['title'] ?></h1>
      <p><?= $guide['intro'] ?></p>
    </div>
  </header>

  <section class="section-padding" aria-label="<?= htmlspecialchars($guide['label'], ENT_QUOTES, 'UTF-8') ?> instructions">
    <div class="container px-4 px-lg-5">
      <ol class="guide-instructions">
        <?php foreach ($guide['steps'] as $index => $instruction): ?>
          <li class="guide-step" id="step-<?= $index + 1 ?>">
            <div class="row g-4 g-lg-5 align-items-center">
              <div class="col-lg-6">
                <figure class="how-screen mb-0">
                  <button class="how-screen-link" type="button" data-bs-toggle="modal" data-bs-target="#guidePreview" data-screen="<?= $instruction['image'] ?>" data-title="Step <?= $index + 1 ?>: <?= htmlspecialchars($instruction['screen'], ENT_QUOTES, 'UTF-8') ?>" data-alt="<?= htmlspecialchars($instruction['alt'], ENT_QUOTES, 'UTF-8') ?>" aria-label="Enlarge screenshot for step <?= $index + 1 ?>: <?= htmlspecialchars($instruction['title'], ENT_QUOTES, 'UTF-8') ?>">
                    <img class="img-fluid" src="<?= $instruction['image'] ?>" alt="<?= htmlspecialchars($instruction['alt'], ENT_QUOTES, 'UTF-8') ?>" width="<?= $instruction['width'] ?>" height="<?= $instruction['height'] ?>" loading="<?= $index === 0 ? 'eager' : 'lazy' ?>" decoding="async">
                  </button>
                  <figcaption><?= $instruction['screen'] ?> <span><i class="bi bi-arrows-fullscreen" aria-hidden="true"></i> Enlarge</span></figcaption>
                </figure>
              </div>
              <div class="col-lg-6">
                <div class="d-flex align-items-center gap-3 mb-3">
                  <div class="workflow-number" aria-label="Step <?= $index + 1 ?>"><?= $index + 1 ?></div>
                  <h2 class="mb-0"><?= $instruction['title'] ?></h2>
                </div>
                <p><?= $instruction['text'] ?></p>
              </div>
            </div>
          </li>
        <?php endforeach; ?>
      </ol>
    </div>
  </section>

  <section class="pb-5" aria-labelledby="guide-cta-title">
    <div class="container px-4 px-lg-5">
      <div class="cta-bar d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-4">
        <div><h2 id="guide-cta-title">See RepairPOS in action</h2><p>Book a demo for your repair shop.</p></div>
        <a class="btn btn-primary" href="/contact">Book a Demo</a>
      </div>
    </div>
  </section>
</main>

<div class="modal fade how-preview-modal" id="guidePreview" tabindex="-1" aria-labelledby="guidePreviewTitle" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen"><div class="modal-content">
    <div class="modal-header"><div><h2 class="modal-title fs-5" id="guidePreviewTitle">Step screenshot</h2><p class="small mb-0">RepairPOS demo · Sample data</p></div><button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close screenshot"></button></div>
    <div class="modal-body"><img id="guidePreviewImage" class="img-fluid d-block mx-auto" alt=""></div>
  </div></div>
</div>

<?php include __DIR__ . '/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.getElementById('guidePreview').addEventListener('show.bs.modal', function (event) {
    const trigger = event.relatedTarget;
    if (!trigger) return;
    document.getElementById('guidePreviewTitle').textContent = trigger.dataset.title;
    const preview = document.getElementById('guidePreviewImage');
    preview.src = trigger.dataset.screen;
    preview.alt = trigger.dataset.alt;
    this.querySelector('.modal-body').scrollTop = 0;
  });
</script>

</body>
</html>
