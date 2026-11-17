<?php
$hasAppScreenshots = true;
$pageTitle = "RepairPOS | POS Software for Repair Shops";
$pageDescription = "RepairPOS is point of sale and job management software for repair shops. Book in repairs, track each item, take payments and send collection updates.";
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
        <div class="eyebrow">RepairPOS</div>
        <h1>POS software for repair shops.</h1>
        <p>Manage repair tickets, customer details, quotes and payments in one place. Track each item from drop-off to collection, with photos, workshop notes and customer updates.</p>
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
            <p>Keep the repair notes and photos with the job.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-3">
        <div class="feature-mini px-xl-4">
          <div class="feature-icon"><i class="bi bi-bell"></i></div>
          <div>
            <h3>Customer Updates</h3>
            <p>Let customers know about quotes and completed repairs by text or email.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-3">
        <div class="feature-mini px-xl-4">
          <div class="feature-icon"><i class="bi bi-credit-card"></i></div>
          <div>
            <h3>Built-in POS</h3>
            <p>Take deposits, settle balances and print or email receipts.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-3">
        <div class="feature-mini ps-xl-4">
          <div class="feature-icon"><i class="bi bi-search"></i></div>
          <div>
            <h3>Fast Lookup</h3>
            <p>Look up a repair by customer, order number or status.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section-padding" id="product-preview">
  <div class="container px-4 px-lg-5">

    <div class="section-title">
      <h2>Follow a repair order in RepairPOS</h2>

      <p>
        Example: Alex leaves black leather heels for a sole repair and a brown leather bag for handle stitching. Follow the same $110 order from booking to collection.
      </p>
    </div>

    <?php
    $carouselId = 'workflow-panels';
    $carouselLabel = 'Example shoe and bag repair order, from booking to collection';
    $previewPanels = [
      ['Book in the heels and bag', 'Alex’s heels need a sole replacement; the bag needs handle stitching. The two repairs total $110.', 'create.webp'],
      ['Take a $30 deposit', 'Record the deposit against Alex’s order. The remaining $80 is due when the repairs are collected.', 'payment.webp'],
      ['Track each repair', 'The heels are ready on the shelf while the bag is still with Sam in the workshop.', 'items.webp'],
      ['Add the repair photos', 'Keep before-and-after photos with the heels, showing their condition and the finished sole repair.', 'photos.webp'],
      ['Prepare for collection', 'Both repairs are complete. Record storage A12 and choose whether to send Alex a text, an email or both.', 'complete.webp'],
      ['Collect the $80 balance', 'Take the remaining payment, issue a receipt and hand the heels and bag back to Alex.', 'final-payment.webp'],
    ];
    include __DIR__ . '/partials/screenshot-carousel.php';
    ?>

  </div>
</section>
<section class="section-padding" id="industries">
  <div class="container px-4 px-lg-5">
    <div class="section-title">
      <h2>Software for your repair business</h2>
      <p>
        From shoe repairs and alterations to device repairs, RepairPOS records the items customers leave with you. Choose your trade to see examples of the work you handle.
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
              Record care instructions and find finished garments on the rail.
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
              Book resoles and heel repairs, with notes for each pair.
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
              Keep measurements and promised dates with each garment.
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
              Record sizing, condition and repair instructions for each piece.
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
              Keep the reported fault, test findings and parts with the device.
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
                <a href="mobile-phone-repair-shop-software">Phone Repair</a>
              </h3>
            </div>

            <p>
              Match handsets to damage photos, screens and batteries.
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
          Repair shop software plans
        </h2>

        <p>
          Start with repair tickets, customer records and payments on a monthly plan. Talk to us about setup for larger teams or more than one shop.
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
            <span>Item status and location</span>
          </div>

        </div>

      </div>

      <!-- RIGHT -->
      <div class="pricing-cta-side">

        <h3>
          Try it with your team
        </h3>

        <p>
          Get in touch to arrange a demo or ask about the free trial.
        </p>

        <a class="btn btn-primary w-100" href="contact">
          Book a Demo
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
          <h2>Book a RepairPOS demo</h2>
          <p>See the repair booking, workshop and payment screens with us. Tell us what your shop needs to manage and we’ll show you the relevant tools.</p>
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

<script src="/js/screenshot-carousel.js"></script>
</body>
</html>
