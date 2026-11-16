<?php
$pageTitle = "How RepairPOS Works | Built for Repair Shops";
$pageDescription = "Track items, not just orders. See how RepairPOS connects repair photos, services, workers, locations and payments from booking to collection.";

// Each overview step links to its corresponding user guide.
$steps = [
  ['id'=>'create', 'label'=>'Book in', 'title'=>'Create a repair order',
    'description'=>'Find the customer, add each item with its services and parts, then agree a price and finish date. Instructions stay with the job.',
    'screen'=>'Customer, items & services', 'image'=>'create', 'width'=>1440, 'height'=>1472, 'link'=>'book-in', 'linkLabel'=>'Book in',
    'alt'=>'RepairPOS demo booking two separate items, black leather heels and a brown leather bag, onto one customer order'],
  ['id'=>'payment', 'label'=>'Quote & pay', 'title'=>'Take a deposit or payment',
    'description'=>'Agree the quote and take a deposit or payment in full. Cash and card payments stay connected to the order, with any remaining balance clearly shown.',
    'screen'=>'Deposits, payments & balances', 'image'=>'payment', 'width'=>1020, 'height'=>402, 'link'=>'quotes-and-payments', 'linkLabel'=>'Quotes and payments',
    'alt'=>'RepairPOS demo payment screen with card and cash choices, a $30 payment against a $110 repair total and $80 remaining'],
  ['id'=>'items', 'label'=>'Track each item', 'title'=>'Track individual items',
    'description'=>'One item may be ready while another is still being repaired. Track each item’s status, location and services, with workers assigned to the work.',
    'screen'=>'Individual item status & location', 'image'=>'items', 'width'=>1356, 'height'=>519, 'link'=>'item-tracking', 'linkLabel'=>'Item tracking',
    'alt'=>'Two items on one RepairPOS order: heels marked Ready on the Ready Shelf with Jamie assigned, and a bag marked Working in the Leather Workshop with Sam assigned'],
  ['id'=>'photos', 'label'=>'Item photos', 'title'=>'Add repair photos',
    'description'=>'Keep before-and-after photos and condition notes against the individual item. Give your team a clear record of what arrived and what was repaired.',
    'screen'=>'Item photos & condition notes', 'image'=>'photos', 'width'=>1406, 'height'=>888, 'link'=>'repair-photos', 'linkLabel'=>'Repair photos',
    'alt'=>'Illustrative RepairPOS item photo preview showing before and after sole repairs and condition notes for black leather heels'],
  ['id'=>'complete', 'label'=>'Ready for collection', 'title'=>'Complete the repair',
    'description'=>'Review completed services, choose a storage location and let the customer know their repair is ready. Repair completion stays separate from the final payment.',
    'screen'=>'Completion, storage & customer updates', 'image'=>'complete', 'width'=>940, 'height'=>849, 'link'=>'complete-repairs', 'linkLabel'=>'Complete the repair',
    'alt'=>'RepairPOS demo completion review with two finished repair items, their workers, storage A12 and SMS and email notification choices'],
  ['id'=>'collect', 'label'=>'Collect & finalise', 'title'=>'Collect and finalise',
    'description'=>'Find the finished items, take any remaining payment and finalise the order. Print or email the receipt and hand the repairs back to the customer.',
    'screen'=>'Final payment & finalisation', 'image'=>'final-payment', 'width'=>1020, 'height'=>402, 'link'=>'collection-and-finalisation', 'linkLabel'=>'Collect and finalise',
    'alt'=>'RepairPOS demo final payment with $80 paid after a $30 deposit on a $110 order, leaving a zero outstanding balance before finalisation']
];

$basics = [
  ['title'=>'Customers & history', 'text'=>'Find repeat customers and their previous repairs.', 'icon'=>'bi-people', 'link'=>'customer-management'],
  ['title'=>'Quotes & invoices', 'text'=>'Price the work and keep balances visible.', 'icon'=>'bi-receipt', 'link'=>'quotes-and-payments'],
  ['title'=>'Cash & card payments', 'text'=>'Take deposits, full payments and final balances.', 'icon'=>'bi-credit-card', 'link'=>'quotes-and-payments'],
  ['title'=>'Products & stock', 'text'=>'Sell products alongside repairs and track stock.', 'icon'=>'bi-box-seam', 'link'=>'products-and-stock'],
  ['title'=>'Receipts & refunds', 'text'=>'Issue receipts and manage payment adjustments.', 'icon'=>'bi-printer', 'link'=>'quotes-and-payments'],
  ['title'=>'Parts & materials', 'text'=>'Attach repair parts to each item and check quantities and stock.', 'icon'=>'bi-tools', 'link'=>'parts-and-materials'],
  ['title'=>'Staff & workshop', 'text'=>'Assign services to workers and track the work being done.', 'icon'=>'bi-person-badge', 'link'=>'staff-and-workshop'],
  ['title'=>'Reports & staff', 'text'=>'Review sales and the work your team completes.', 'icon'=>'bi-bar-chart', 'link'=>'reports']
];
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'partials/head.php'; ?>

<body>

<?php include 'partials/header.php'; ?>

<main class="how-it-works">

  <header class="contact-banner how-hero">
    <div class="container px-4 px-lg-5">
      <div class="row align-items-center g-4 g-lg-5">
        <div class="col-lg-7">
          <div class="eyebrow">POS built for repair shops</div>
          <h1>Track items.<br>Not just orders.</h1>
          <p>A sale is only part of the job. RepairPOS keeps every item’s services, photos, worker, status and location connected — from the front counter to collection.</p>
          <div class="d-flex flex-column flex-sm-row gap-3 mt-4">
            <a class="btn btn-primary" href="#workflow">See how it works</a>
            <a class="btn btn-outline-light" href="/contact">Book a Demo</a>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="how-item-example" aria-label="Example of two items progressing separately on the same order">
            <div class="how-item-example-heading"><span class="how-summary-label">One customer. One order.</span><h2>Individual item tracking</h2></div>
            <div class="how-example-item">
              <div class="d-flex align-items-center justify-content-between gap-2"><strong>Black leather heels</strong><span class="how-status how-status-ready">Ready</span></div>
              <p>Sole replacement · Jamie</p><span><i class="bi bi-geo-alt" aria-hidden="true"></i> Ready Shelf</span>
            </div>
            <div class="how-example-item">
              <div class="d-flex align-items-center justify-content-between gap-2"><strong>Brown leather bag</strong><span class="how-status how-status-working">Working</span></div>
              <p>Handle repair · Sam</p><span><i class="bi bi-geo-alt" aria-hidden="true"></i> Leather Workshop</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section class="section-padding pb-0 how-dashboard" id="dashboard" aria-labelledby="dashboard-title">
    <div class="container px-4 px-lg-5">
      <div class="row align-items-center g-4 g-lg-5">
        <div class="col-lg-7">
          <figure class="how-screen how-dashboard-screen mb-0">
            <button class="how-screen-link" type="button" data-bs-toggle="modal" data-bs-target="#screenPreview" data-screen="/assets/images/app/dashboard.webp" data-title="Customer orders dashboard" data-alt="RepairPOS demo dashboard showing Working, Urgent, Complete and Quote orders, due dates and separate item locations" aria-label="Enlarge the dashboard preview">
              <img class="img-fluid" src="/assets/images/app/dashboard.webp" alt="RepairPOS demo dashboard showing Working, Urgent, Complete and Quote orders, due dates and separate item locations" width="1440" height="1051" loading="lazy" decoding="async">
            </button>
            <figcaption>Dashboard · Sample orders <span><i class="bi bi-arrows-fullscreen" aria-hidden="true"></i> Enlarge</span></figcaption>
          </figure>
        </div>
        <div class="col-lg-5">
          <h2 id="dashboard-title">See your workshop at one glance</h2>
          <p class="how-description">See working, urgent and completed orders, plus those awaiting a quote. Check due dates and locations, then open the order you need.</p>
          <p class="how-description">Within each order, every item has its own progress. One item can be ready while another is still being repaired.</p>
          <a class="how-guide-link" href="#items">Track individual items <i class="bi bi-arrow-down" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </section>

  <section class="section-padding" id="workflow" aria-label="RepairPOS workflow">
    <div class="container px-4 px-lg-5">
      <nav class="how-flow-nav" aria-label="RepairPOS workflow">
        <ol class="how-flow-links list-unstyled mb-0">
          <?php foreach ($steps as $index => $step): ?>
            <li><a href="#<?= $step['id'] ?>"><span class="how-flow-number"><?= $index + 1 ?></span> <?= $step['label'] ?></a></li>
          <?php endforeach; ?>
        </ol>
      </nav>

      <?php foreach ($steps as $index => $step): ?>
        <section class="how-step" id="<?= $step['id'] ?>" aria-labelledby="<?= $step['id'] ?>-title">
          <div class="row align-items-center g-4">
            <div class="col-lg-6 order-lg-2">
              <div>
                <div>
                  <div class="eyebrow mb-2"><?= $step['label'] ?></div>
                  <div class="d-flex align-items-center gap-3">
                    <span class="workflow-number" aria-hidden="true"><?= $index + 1 ?></span>
                    <h3 class="mb-0" id="<?= $step['id'] ?>-title"><?= $step['title'] ?></h3>
                  </div>
                  <p class="how-description"><?= $step['description'] ?></p>
                  <a class="how-guide-link" href="/<?= $step['link'] ?>"><?= $step['linkLabel'] ?> <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 order-lg-1">
              <figure class="how-screen mb-0">
                <button class="how-screen-link" type="button" data-bs-toggle="modal" data-bs-target="#screenPreview" data-screen="/assets/images/app/<?= $step['image'] ?>.webp" data-title="<?= htmlspecialchars($step['screen'], ENT_QUOTES, 'UTF-8') ?>" data-alt="<?= htmlspecialchars($step['alt'], ENT_QUOTES, 'UTF-8') ?>" aria-label="Enlarge <?= htmlspecialchars($step['screen'], ENT_QUOTES, 'UTF-8') ?> preview">
                  <img class="img-fluid" src="/assets/images/app/<?= $step['image'] ?>.webp" alt="<?= htmlspecialchars($step['alt'], ENT_QUOTES, 'UTF-8') ?>" width="<?= $step['width'] ?>" height="<?= $step['height'] ?>" loading="lazy" decoding="async">
                </button>
                <figcaption><?= $step['screen'] ?> <span><i class="bi bi-arrows-fullscreen" aria-hidden="true"></i> Enlarge</span></figcaption>
              </figure>
            </div>
          </div>
        </section>
      <?php endforeach; ?>
      <p class="how-demo-note text-center mt-3 mb-0">Desktop demo previews use sample data. Repair photos are illustrative. Select any screen to see it full size.</p>
    </div>
  </section>

  <section class="section-padding pt-0" aria-labelledby="basics-title">
    <div class="container px-4 px-lg-5">
      <div class="section-title mb-4">
        <h2 id="basics-title">POS essentials</h2>
        <p>The tools for running the counter, connected to the tools for running the workshop.</p>
      </div>
      <div class="row g-3">
        <?php foreach ($basics as $feature): ?>
          <div class="col-md-6 col-xl-3">
            <a class="how-basic-card d-flex gap-3 h-100" href="/<?= $feature['link'] ?>">
              <div class="feature-icon"><i class="bi <?= $feature['icon'] ?>" aria-hidden="true"></i></div>
              <div><h3><?= $feature['title'] ?></h3><p class="mb-0"><?= $feature['text'] ?></p></div>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="text-center mt-4"><a class="btn btn-outline-light" href="/repairpos-guides">All user guides</a></div>
      <p class="how-features-link text-center mt-4 mb-0">Explore <a href="/features#integrations">integrations</a>, <a href="/features#automation">automation</a> and <a href="/features">all RepairPOS features</a>.</p>
    </div>
  </section>

  <section class="pb-5" aria-labelledby="demo-title">
    <div class="container px-4 px-lg-5">
      <div class="cta-bar d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-4">
        <div><h2 id="demo-title">See RepairPOS in action</h2><p>See how RepairPOS fits your shop.</p></div>
        <a class="btn btn-primary" href="/contact">Book a Demo</a>
      </div>
    </div>
  </section>

</main>

<div class="modal fade how-preview-modal" id="screenPreview" tabindex="-1" aria-labelledby="screenPreviewTitle" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen"><div class="modal-content">
    <div class="modal-header"><div><h2 class="modal-title fs-5" id="screenPreviewTitle">Desktop preview</h2><p class="small mb-0">RepairPOS demo · Sample data</p></div><button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close desktop preview"></button></div>
    <div class="modal-body"><img id="screenPreviewImage" class="img-fluid d-block mx-auto" alt=""></div>
  </div></div>
</div>

<?php include 'partials/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.getElementById('screenPreview').addEventListener('show.bs.modal', function (event) {
    const trigger = event.relatedTarget;
    if (!trigger) return;
    document.getElementById('screenPreviewTitle').textContent = trigger.dataset.title;
    const preview = document.getElementById('screenPreviewImage');
    preview.src = trigger.dataset.screen;
    preview.alt = trigger.dataset.alt;
  });
</script>

</body>
</html>
