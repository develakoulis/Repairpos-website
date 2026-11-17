<?php
$pageTitle = "How RepairPOS Works | Booking to Collection";
$pageDescription = "See how RepairPOS handles repair bookings, item tracking, custom email and SMS communications, payments and collection.";

$coreFeatures = [
  ['Workshop orders and item locations', 'Manage open, urgent, quoted and completed orders, with separate item locations and workshop statuses visible from the customer order list.', 'dashboard-table.jpg', '/item-tracking', 'Order tracking guide'],
  ['Email and SMS at every order stage', 'Tailor email and SMS wording for booking, quote review, work started, collection and finalisation. Keep each update relevant to its stage.', 'showcase/communications-journey.jpg', '/customer-updates', 'Customer communications guide'],
  ['Custom quote and receipt emails', 'Edit itemised quotes, invoice and receipt emails with the customer’s repair details, prices, instructions and your shop’s own wording.', 'showcase/custom-quote-email.jpg', '/customer-updates', 'Custom email guide'],
  ['Order history and message delivery', 'Follow bookings, quotes, work updates, collection messages and receipts in the order history, with channel and delivery records alongside the repair.', 'showcase/order-communications-history.jpg', '/customer-updates', 'Message history guide'],
  ['Sales, payments and order types', 'Compare revenue trends and order types across chosen dates, with collected payments, daily averages and best sales days in the report.', 'showcase/sales-reporting.jpg', '/reports', 'Sales reporting guide'],
  ['Staff and workshop reporting', 'Review finalised repair value by worker and department, alongside average repair values. See how the workshop’s completed work breaks down.', 'showcase/workshop-reporting.jpg', '/reports', 'Workshop reporting guide'],
];

// Each overview step links to its corresponding user guide.
$steps = [
  ['id'=>'create', 'label'=>'Book in', 'title'=>'Create a repair order',
    'description'=>'Find the customer and list the items they’ve left. Add the repairs, parts, agreed price and finish date.',
    'screen'=>'Customer, items & services', 'image'=>'create', 'width'=>1440, 'height'=>1472, 'link'=>'book-in', 'linkLabel'=>'Book in',
    'alt'=>'RepairPOS demo booking two separate items, black leather heels and a brown leather bag, onto one customer order'],
  ['id'=>'payment', 'label'=>'Quote & pay', 'title'=>'Take a deposit or payment',
    'description'=>'Take a deposit or the full amount by cash or card. The order shows what’s been paid and what’s still owed.',
    'screen'=>'Deposits, payments & balances', 'image'=>'payment', 'width'=>1020, 'height'=>402, 'link'=>'quotes-and-payments', 'linkLabel'=>'Quotes and payments',
    'alt'=>'RepairPOS demo payment screen with card and cash choices, a $30 payment against a $110 repair total and $80 remaining'],
  ['id'=>'items', 'label'=>'Track each item', 'title'=>'Track individual items',
    'description'=>'The heels can be ready while the bag still needs work. Each item has its own status, location and assigned repairs.',
    'screen'=>'Individual item status & location', 'image'=>'items', 'width'=>1356, 'height'=>519, 'link'=>'item-tracking', 'linkLabel'=>'Item tracking',
    'alt'=>'Two items on one RepairPOS order: heels marked Ready on the Ready Shelf with Jamie assigned, and a bag marked Working in the Leather Workshop with Sam assigned'],
  ['id'=>'photos', 'label'=>'Item photos', 'title'=>'Add repair photos',
    'description'=>'Photograph the item when it arrives and when the work is done. Keep both sets of photos with its condition notes.',
    'screen'=>'Item photos & condition notes', 'image'=>'photos', 'width'=>1406, 'height'=>888, 'link'=>'repair-photos', 'linkLabel'=>'Repair photos',
    'alt'=>'Illustrative RepairPOS item photo preview showing before and after sole repairs and condition notes for black leather heels'],
  ['id'=>'communications', 'label'=>'Email & SMS', 'title'=>'Custom email and SMS communications',
    'description'=>'Set the wording for booking confirmations, quotes, work-in-progress updates, collection messages and final receipts. Keep email and SMS communication specific to each stage of the customer’s order.',
    'points'=>[
      'Stage-specific email and SMS wording for bookings, quotes, work and collection.',
      'Editable quote, invoice and receipt emails, plus individual SMS messages.',
      'Message history and delivery feedback in the order’s activity.'
    ],
    'screen'=>'Custom quote email · Sample order', 'image'=>'showcase/custom-quote-email', 'format'=>'jpg', 'width'=>1200, 'height'=>794, 'link'=>'customer-updates', 'linkLabel'=>'Email and SMS communications guide',
    'alt'=>'RepairPOS editable quote email for Alex with itemised sole and bag repairs, a $110 total and custom repair instructions'],
  ['id'=>'complete', 'label'=>'Ready for collection', 'title'=>'Complete the repair',
    'description'=>'Check the work, record where the finished items are stored and send a collection message. Take any remaining payment at pickup.',
    'screen'=>'Completion, storage & customer updates', 'image'=>'complete', 'width'=>940, 'height'=>849, 'link'=>'complete-repairs', 'linkLabel'=>'Complete the repair',
    'alt'=>'RepairPOS demo completion review with two finished repair items, their workers, storage A12 and SMS and email notification choices'],
  ['id'=>'collect', 'label'=>'Collect & finalise', 'title'=>'Collect and finalise',
    'description'=>'Find the items, collect the balance and close the order. Print or email the receipt before handing everything back.',
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
          <h1>How RepairPOS works</h1>
          <p>Follow a repair from booking to collection. See how RepairPOS records each item, keeps the workshop notes together, manages payments and sends custom email and SMS messages to customers.</p>
          <div class="d-flex flex-column flex-sm-row gap-3 mt-4">
            <a class="btn btn-primary" href="#workflow">See how it works</a>
            <a class="btn btn-outline-light" href="/contact">Book a Demo</a>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="how-item-example" aria-label="Example of two items progressing separately on the same order">
            <div class="how-item-example-heading"><span class="how-summary-label">Example customer order</span><h2>Individual item tracking</h2></div>
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

  <section class="section-padding pb-0" id="dashboard" aria-labelledby="core-features-title">
    <div class="container px-4 px-lg-5">
      <div class="section-title mb-4">
        <h2 id="core-features-title">Reporting, workshop control and customer communications</h2>
        <p>Explore sales and staff reports, track workshop jobs, and tailor email and SMS messages for each stage of an order.</p>
      </div>
      <?php
      $carouselId = 'core-features-carousel';
      $carouselLabel = 'RepairPOS reporting, workshop and customer communication features';
      $carouselItemType = 'feature';
      $carouselShowNumbers = false;
      $carouselModalId = 'screenPreview';
      $previewPanels = $coreFeatures;
      include __DIR__ . '/partials/screenshot-carousel.php';
      ?>
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
        <?php $stepImage = '/assets/images/app/' . $step['image'] . '.' . ($step['format'] ?? 'webp'); ?>
        <section class="how-step" id="<?= $step['id'] ?>" aria-labelledby="<?= $step['id'] ?>-title">
          <div class="row align-items-center g-4">
            <div class="col-lg-6 order-lg-2">
              <div>
                <div>
                  <div class="d-flex align-items-center gap-3">
                    <span class="workflow-number" aria-hidden="true"><?= $index + 1 ?></span>
                    <h3 class="mb-0" id="<?= $step['id'] ?>-title"><?= $step['title'] ?></h3>
                  </div>
                  <p class="how-description"><?= $step['description'] ?></p>
                  <?php if (!empty($step['points'])): ?>
                    <ul class="check-list mt-3 mb-2">
                      <?php foreach ($step['points'] as $point): ?>
                        <li><i class="bi bi-check-circle" aria-hidden="true"></i><?= htmlspecialchars($point, ENT_QUOTES, 'UTF-8') ?></li>
                      <?php endforeach; ?>
                    </ul>
                  <?php endif; ?>
                  <a class="how-guide-link" href="/<?= $step['link'] ?>"><?= $step['linkLabel'] ?> <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 order-lg-1">
              <figure class="how-screen mb-0">
                <button class="how-screen-link" type="button" data-bs-toggle="modal" data-bs-target="#screenPreview" data-screen="<?= htmlspecialchars($stepImage, ENT_QUOTES, 'UTF-8') ?>" data-title="<?= htmlspecialchars($step['screen'], ENT_QUOTES, 'UTF-8') ?>" data-alt="<?= htmlspecialchars($step['alt'], ENT_QUOTES, 'UTF-8') ?>" aria-label="Enlarge <?= htmlspecialchars($step['screen'], ENT_QUOTES, 'UTF-8') ?> preview">
                  <img class="img-fluid" src="<?= htmlspecialchars($stepImage, ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($step['alt'], ENT_QUOTES, 'UTF-8') ?>" width="<?= $step['width'] ?>" height="<?= $step['height'] ?>" loading="lazy" decoding="async">
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
        <p>Alongside repair tracking, RepairPOS includes customer records, stock, receipts and sales reports. These guides explain the tasks staff handle each day.</p>
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
        <div><h2 id="demo-title">Book a RepairPOS walkthrough</h2><p>Bring a typical repair job and we’ll show you how to book it in, record the work and arrange collection. There’s time for questions about your shop’s setup.</p></div>
        <a class="btn btn-primary" href="/contact">Book a Demo</a>
      </div>
    </div>
  </section>

</main>

<div class="modal fade how-preview-modal" id="screenPreview" tabindex="-1" aria-labelledby="screenPreviewTitle" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen"><div class="modal-content">
    <div class="modal-header"><div><h2 class="modal-title fs-5" id="screenPreviewTitle">Desktop preview</h2><p class="small mb-0">RepairPOS demo · Sample data</p></div><button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close desktop preview"></button></div>
    <div class="modal-body d-flex"><img id="screenPreviewImage" class="img-fluid d-block m-auto" alt=""></div>
  </div></div>
</div>

<?php include 'partials/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="/js/screenshot-carousel.js"></script>
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
