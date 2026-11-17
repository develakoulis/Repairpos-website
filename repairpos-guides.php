<?php
$pageTitle = 'RepairPOS User Guides | Repairs, Payments and Daily Tasks';
$pageDescription = 'Practical RepairPOS guides for booking repairs, tracking items, photos, payments, collection, customers, stock, staff and reports.';
require __DIR__ . '/partials/repair-guide-data.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'partials/head.php'; ?>

<body>

<?php include 'partials/header.php'; ?>

<main class="repair-guide">
  <header class="contact-banner how-hero">
    <div class="container px-4 px-lg-5">
      <div class="eyebrow">Using RepairPOS</div><h1>User guides</h1>
      <p>Follow a repair from booking to collection, or find help with an everyday task.</p>
      <a class="btn btn-outline-light mt-4" href="/how-it-works">How RepairPOS works</a>
    </div>
  </header>
  <?php foreach (['Booking to collection', 'Everyday tools'] as $group): ?>
    <section class="section-padding" aria-labelledby="<?= $group === 'Booking to collection' ? 'flow-guides' : 'daily-guides' ?>">
      <div class="container px-4 px-lg-5">
        <div class="section-title mb-4"><h2 id="<?= $group === 'Booking to collection' ? 'flow-guides' : 'daily-guides' ?>"><?= $group ?></h2></div>
        <div class="row g-3">
          <?php foreach ($repairGuides as $id => $guide): if ($guide['group'] !== $group) continue; ?>
            <div class="col-md-6 col-lg-4">
              <a class="how-basic-card d-block h-100" href="/<?= $id ?>"><h3><?= $guide['label'] ?></h3><p><?= $guide['intro'] ?></p><span class="how-detail-link">Read guide <i class="bi bi-arrow-right" aria-hidden="true"></i></span></a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  <?php endforeach; ?>
  <section class="pb-5"><div class="container px-4 px-lg-5"><div class="cta-bar"><h2>See what else is included</h2><p>Visit <a href="/features">Features</a> for stock, reporting, integrations and other tools.</p></div></div></section>
</main>

<?php include 'partials/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
