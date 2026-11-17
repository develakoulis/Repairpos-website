<?php
$pageTitle = "Pricing | RepairPOS";
$pageDescription = "RepairPOS plans start at $29 USD per month. Compare the Starter plan with custom pricing for larger teams and shop setups.";
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'partials/head.php'; ?>

<body>

<?php include 'partials/header.php'; ?>

<main>

  <section class="section-padding">
    <div class="container px-4 px-lg-5">

      <div class="section-title">
        <div class="eyebrow">Pricing</div>
        <h1 class="pricing-page-title">Repair shop software pricing.</h1>
        <p>
          RepairPOS plans start at $29 USD a month for repair tickets, customer records and payments. Ask about custom pricing for larger teams, multiple shops or integrations.
        </p>
      </div>

      <div class="row g-4 justify-content-center">

        <!-- STARTER -->
        <div class="col-lg-5">
          <div class="pricing-card pricing-card-featured h-100">

            <div class="small text-uppercase fw-bold mb-2">
              <i class="bi bi-star-fill text-warning me-1"></i>
              Starter
            </div>

            <div class="mb-3">
              <span class="display-5 fw-bold text-white">$29</span>
              <span class="text-muted-custom"> USD / month</span>
            </div>

            <p>
              For independent shops managing repair tickets, customers and payments.
            </p>

            <ul class="check-list">
              <li><i class="bi bi-check-circle"></i>Repair job tickets</li>
              <li><i class="bi bi-check-circle"></i>Customer records</li>
              <li><i class="bi bi-check-circle"></i>Quotes and invoices</li>
              <li><i class="bi bi-check-circle"></i>Payments and balances</li>
              <li><i class="bi bi-check-circle"></i>Repair notes and photos</li>
              <li><i class="bi bi-check-circle"></i>Job status tracking</li>
              <li><i class="bi bi-check-circle"></i>Email customer updates</li>
              <li><i class="bi bi-check-circle"></i>Repair history for each customer</li>
            </ul>

            <div class="d-grid mt-4">
              <a class="btn btn-primary" href="/contact">
                Start Free Trial
              </a>
            </div>

          </div>
        </div>

        <!-- CUSTOM -->
        <div class="col-lg-5">
          <div class="pricing-card h-100">

            <div class="small text-uppercase text-muted-custom fw-bold mb-2">
              Tailored
            </div>

            <div class="mb-3">
              <span class="display-6 fw-bold text-white">Custom pricing</span>
            </div>

            <p>
              For teams that need help with setup, extra locations or integrations.
            </p>

            <ul class="check-list">
              <li><i class="bi bi-check-circle"></i>Everything in Starter</li>
              <li><i class="bi bi-check-circle"></i>Work allocation across your team</li>
              <li><i class="bi bi-check-circle"></i>SMS customer notifications</li>
              <li><i class="bi bi-check-circle"></i>Custom repair statuses</li>
              <li><i class="bi bi-check-circle"></i>Advanced reporting</li>
              <li><i class="bi bi-check-circle"></i>Setup and staff training</li>
              <li><i class="bi bi-check-circle"></i>Setup for your type of repairs</li>
              <li><i class="bi bi-check-circle"></i>Integration support where available</li>
            </ul>

            <div class="d-grid mt-4">
              <a class="btn btn-outline-light" href="/contact">
                Request Custom Pricing
              </a>
            </div>

          </div>
        </div>

      </div>

      <div class="cta-bar mt-5 d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-4">
        <div>
          <h2>Need help choosing?</h2>
          <p>
            Tell us how many shops and staff you have, and what you need to manage.
          </p>
        </div>

        <a class="btn btn-primary" href="/contact">
          Talk to RepairPOS
        </a>
      </div>

    </div>
  </section>

</main>

<?php include 'partials/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
