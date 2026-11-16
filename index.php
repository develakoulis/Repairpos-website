<?php
$hasAppScreenshots = true;
$pageTitle = "RepairPOS | POS Software for Repair Shops";
$pageDescription = "RepairPOS is a cloud based point of sale and job management software for repair shops. Manage jobs, customers, invoices, photos, payments and notifications in one simple system.";
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'partials/head.php'; ?>

<body>

<?php include 'partials/header.php'; ?>

<header class="hero">
  <div class="container px-4 px-lg-5">
    <div class="row">
      <div class="col-lg-7 col-xl-6">
        <div class="eyebrow">POS software for repair businesses</div>
        <h1>Run your repair shop from one simple system.</h1>
        <p>Manage job tickets, customer details, photos, invoices, payments and pickup notifications from drop-off or mail-in to completion.</p>
        <div class="d-flex flex-column flex-sm-row gap-3">
          <a class="btn btn-primary btn-lg" href="contact">Start Free Trial</a>
          <a class="btn btn-outline-light btn-lg" href="features">View Features</a>
        </div>
      </div>
    </div>
  </div>
</header>

<section class="feature-strip" id="features">
  <div class="container px-4 px-lg-5">
    <div class="row g-0">
      <div class="col-md-6 col-xl-3">
        <div class="feature-mini pe-xl-4">
          <div class="feature-icon"><i class="bi bi-card-checklist"></i></div>
          <div>
            <h3>Digital Job Tickets</h3>
            <p>Track notes, photos, status, services and customer details in one place.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-3">
        <div class="feature-mini px-xl-4">
          <div class="feature-icon"><i class="bi bi-bell"></i></div>
          <div>
            <h3>Customer Updates</h3>
            <p>Send SMS and email updates when jobs are created, quoted or ready.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-3">
        <div class="feature-mini px-xl-4">
          <div class="feature-icon"><i class="bi bi-credit-card"></i></div>
          <div>
            <h3>Built-in POS</h3>
            <p>Create invoices, take payments, issue receipts and manage balances.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-3">
        <div class="feature-mini ps-xl-4">
          <div class="feature-icon"><i class="bi bi-search"></i></div>
          <div>
            <h3>Fast Lookup</h3>
            <p>Find jobs by name, mobile, email, order number or ticket status.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section-padding" id="product-preview">
  <div class="container px-4 px-lg-5">

    <div class="section-title">
      <h2>See RepairPOS in action</h2>

      <p>
        Manage repairs, customers, payments, reporting and communication
        from one connected platform built for modern repair businesses.
      </p>
    </div>

    <?php
    $previewPanels = [
      ['Create tickets', 'Find a customer, set a due date and book in their repair items.', 'create.webp'],
      ['Track each item', 'Keep each item’s services, status and workshop location together.', 'items.webp'],
      ['Before & after photos', 'Record each item’s condition and show the finished repair.', 'photos.webp'],
      ['Your workshop at a glance', 'See open orders, urgent jobs and repairs ready for collection.', 'dashboard.webp'],
      ['Deposits & payments', 'Take a deposit or full payment and keep the balance in view.', 'payment.webp'],
      ['Parts & materials', 'Add parts to a repair alongside the work being carried out.', 'steps/parts-and-materials-4.webp'],
      ['Collection & finalisation', 'Settle the balance, hand over the items and finalise the order.', 'final-payment.webp'],
      ['Reports & insights', 'Keep an eye on sales, payments and workshop performance.', 'reports.webp'],
    ];
    ?>
    <div class="workflow-carousel-wrap">
      <button type="button" class="workflow-arrow workflow-prev" aria-label="Previous panel" aria-controls="workflow-panels">
        <i class="bi bi-arrow-left" aria-hidden="true"></i>
      </button>
      <div class="workflow-carousel" id="workflow-panels" role="region" aria-label="RepairPOS feature screenshots" tabindex="0">
        <?php foreach ($previewPanels as $panelIndex => [$panelTitle, $panelDescription, $panelImage]): ?>
          <?php [$panelWidth, $panelHeight] = getimagesize(__DIR__ . '/assets/images/app/' . $panelImage); ?>
          <div class="workflow-slide">
            <div class="workflow-card">
              <button type="button" class="app-screenshot-trigger" data-bs-toggle="modal" data-bs-target="#appScreenshotPreview" data-screen="/assets/images/app/<?= $panelImage ?>" data-title="<?= htmlspecialchars($panelTitle, ENT_QUOTES, 'UTF-8') ?>" data-alt="RepairPOS demo: <?= htmlspecialchars($panelTitle, ENT_QUOTES, 'UTF-8') ?>" aria-label="Enlarge <?= htmlspecialchars($panelTitle, ENT_QUOTES, 'UTF-8') ?> screenshot">
                <img src="/assets/images/app/<?= $panelImage ?>" class="app-screenshot" alt="RepairPOS demo: <?= htmlspecialchars($panelTitle, ENT_QUOTES, 'UTF-8') ?>" width="<?= $panelWidth ?>" height="<?= $panelHeight ?>" loading="lazy" decoding="async">
              </button>
              <div class="workflow-content">
                <div class="workflow-header">
                  <div class="workflow-number"><?= $panelIndex + 1 ?></div>
                  <h3><?= htmlspecialchars($panelTitle, ENT_QUOTES, 'UTF-8') ?></h3>
                </div>
                <p><?= $panelDescription ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <button type="button" class="workflow-arrow workflow-next" aria-label="Next panel" aria-controls="workflow-panels">
        <i class="bi bi-arrow-right" aria-hidden="true"></i>
      </button>
      <p class="workflow-position text-center text-muted-custom mb-0" aria-live="polite" aria-atomic="true"></p>
    </div>

    <div class="text-center mt-4">
      <a class="btn btn-outline-light" href="/how-it-works">See the full repair workflow</a>
    </div>

  </div>
</section>
<section class="section-padding" id="industries">
  <div class="container px-4 px-lg-5">
    <div class="section-title">
      <h2>Made for high-volume repair shops</h2>
      <p>
        RepairPOS is built for businesses that need fast job tracking,
        quoting, customer updates and payments. Manage your whole
        operation with powerful software.
      </p>
    </div>

    <div class="row g-3 g-lg-4">

      <div class="col-md-6 col-lg-4">
        <div class="industry-card">
          <a href="dry-cleaning-pos-software">
            <img src="assets/images/dry-clean.png" alt="Dry cleaning garments">
          </a>

          <div class="industry-content">
            <div class="industry-title">
              <div class="line-icon"><i class="bi bi-basket3"></i></div>
              <h3>
                <a href="dry-cleaning-pos-software">Dry Cleaning</a>
              </h3>
            </div>

            <p>
              Manage garment intake, customer notifications, payments and collection status.
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="industry-card">

          <a href="shoe-repair-shop-software">
            <img src="assets/images/shoe-repair.png" alt="Shoe repair workbench">
          </a>

          <div class="industry-content">
            <div class="industry-title">
              <div class="line-icon"><i class="bi bi-hammer"></i></div>
              <h3>
                <a href="shoe-repair-shop-software">Shoe Repair</a>
              </h3>
            </div>

            <p>
              Track resoles, heel work, polishing, pickups and customer history.
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="industry-card">

          <a href="tailor-shop-software">
            <img src="assets/images/tailor.png" alt="Tailoring studio">
          </a>

          <div class="industry-content">
            <div class="industry-title">
              <div class="line-icon"><i class="bi bi-scissors"></i></div>
              <h3>
                <a href="tailor-shop-software">Tailoring</a>
              </h3>
            </div>

            <p>
              Record measurements, alterations, fitting notes, deadlines and orders.
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="industry-card">

          <a href="jewellery-repair-shop-software">
            <img src="assets/images/jewellery-repair-shop-software-hero.png" alt="Jewellery repair workbench">
          </a>

          <div class="industry-content">
            <div class="industry-title">
              <div class="line-icon"><i class="bi bi-gem"></i></div>
              <h3>
                <a href="jewellery-repair-shop-software">Jewellery Repair</a>
              </h3>
            </div>

            <p>
              Manage repairs, stone replacements, polishing, customer approvals and job tracking.
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="industry-card">

          <a href="computer-repair-shop-software">
            <img src="assets/images/computer-repair.png" alt="Computer repair workbench">
          </a>

          <div class="industry-content">
            <div class="industry-title">
              <div class="line-icon"><i class="bi bi-pc-display"></i></div>
              <h3>
                <a href="computer-repair-shop-software">Computer Repair</a>
              </h3>
            </div>

            <p>
              Track diagnostics, parts, repairs, deposits, approvals and completed jobs.
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="industry-card">

          <a href="mobile-phone-repair-shop-software">
            <img src="assets/images/iphone-repair.png" alt="iPhone repair bench">
          </a>

          <div class="industry-content">
            <div class="industry-title">
              <div class="line-icon"><i class="bi bi-phone"></i></div>
              <h3>
                <a href="mobile-phone-repair-shop-software">iPhone Repair</a>
              </h3>
            </div>

            <p>
              Manage screen repairs, batteries, device notes, quotes and fast pickups.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="section-padding pt-0" id="pricing">

  <div class="container px-4 px-lg-5">

    <div class="pricing-cta-wrap">

      <!-- LEFT -->
      <div class="pricing-cta-main">

        <div class="eyebrow mb-3">
          RepairPOS Pricing
        </div>

        <h2>
          Simple pricing for growing repair businesses.
        </h2>

        <p>
          Start with the essentials and scale as your repair shop grows.
          Built for independent workshops, multi-staff stores and high-volume repair operations.
        </p>

        <div class="pricing-feature-grid">

          <div class="pricing-feature">
            <i class="bi bi-check-circle"></i>
            <span>Unlimited customers</span>
          </div>

          <div class="pricing-feature">
            <i class="bi bi-check-circle"></i>
            <span>Digital job tickets</span>
          </div>

          <div class="pricing-feature">
            <i class="bi bi-check-circle"></i>
            <span>Invoices & payments</span>
          </div>

          <div class="pricing-feature">
            <i class="bi bi-check-circle"></i>
            <span>Staff productivity tracking</span>
          </div>

          <div class="pricing-feature">
            <i class="bi bi-check-circle"></i>
            <span>SMS & email updates</span>
          </div>

          <div class="pricing-feature">
            <i class="bi bi-check-circle"></i>
            <span>Built for repair workflows</span>
          </div>

        </div>

      </div>

      <!-- RIGHT -->
      <div class="pricing-cta-side">

        <div class="pricing-badge">
          Launch Offer
        </div>

        <h3>
          Start with a free trial
        </h3>

        <p>
          Explore RepairPOS with your team before committing.
          Setup is simple and new features are added regularly.
        </p>

        <a class="btn btn-primary w-100" href="contact">
          Request Demo
        </a>

      </div>

    </div>

  </div>

</section>
<section class="pb-5">
  <div class="container px-4 px-lg-5">
    <div class="cta-bar d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-4">
      <div class="d-flex align-items-start gap-3">
        <div class="feature-icon"><i class="bi bi-calendar-check"></i></div>
        <div>
          <h2>Ready to simplify your repair workflow?</h2>
          <p>Start with a free trial or book a short demo.</p>
        </div>
      </div>
      <div class="d-flex flex-column flex-sm-row gap-3">
        <a class="btn btn-primary" href="contact">Contact RepairPOS</a>
        <a class="btn btn-outline-light" href="mailto:hello@repairpos.co">Email Us</a>
      </div>
    </div>
  </div>
</section>

<?php include 'partials/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
(() => {
  const carousel = document.querySelector('.workflow-carousel');
  const previous = document.querySelector('.workflow-prev');
  const next = document.querySelector('.workflow-next');
  const position = document.querySelector('.workflow-position');
  const slides = [...carousel.querySelectorAll('.workflow-slide')];
  const stepWidth = () => slides[0].getBoundingClientRect().width + parseFloat(getComputedStyle(carousel).gap);
  const update = () => {
    const first = Math.round(carousel.scrollLeft / stepWidth()) + 1;
    const last = Math.min(slides.length, first + Math.round(carousel.clientWidth / stepWidth()) - 1);
    position.textContent = (first === last ? first : first + '–' + last) + ' of ' + slides.length;
    previous.disabled = carousel.scrollLeft < 2;
    next.disabled = carousel.scrollLeft + carousel.clientWidth >= carousel.scrollWidth - 2;
  };
  const move = direction => carousel.scrollBy({left: direction * stepWidth(), behavior: matchMedia('(prefers-reduced-motion: reduce)').matches ? 'instant' : 'smooth'});
  previous.addEventListener('click', () => move(-1));
  next.addEventListener('click', () => move(1));
  carousel.addEventListener('scroll', update, {passive: true});
  window.addEventListener('resize', update);
  update();
})();
</script>
</body>
</html>
