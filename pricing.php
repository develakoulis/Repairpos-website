<?php
$pageTitle = "Pricing | RepairPOS";
$pageDescription = "Simple RepairPOS pricing for repair shop point of sale and job management software. Start from $29 USD per month or request custom pricing for larger workflows.";
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
        <h1 class="pricing-page-title">Simple pricing for repair shops.</h1>
        <p>
          Start with the core tools your repair business needs. Choose a simple monthly plan,
          or request a custom setup for larger teams, multiple locations or specialist workflows.
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
              For independent repair shops that want to replace paper tickets,
              organise jobs and manage customers from one system.
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
              For larger repair businesses, multi-staff teams, specialist workflows,
              custom onboarding, integrations or higher-volume operations.
            </p>

            <ul class="check-list">
              <li><i class="bi bi-check-circle"></i>Everything in Starter</li>
              <li><i class="bi bi-check-circle"></i>Multiple staff workflows</li>
              <li><i class="bi bi-check-circle"></i>SMS customer notifications</li>
              <li><i class="bi bi-check-circle"></i>Custom repair statuses</li>
              <li><i class="bi bi-check-circle"></i>Advanced reporting</li>
              <li><i class="bi bi-check-circle"></i>Workflow setup and onboarding</li>
              <li><i class="bi bi-check-circle"></i>Support for specialist repair categories</li>
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
          <h2>Not sure which setup fits?</h2>
          <p>
            Tell us how your repair shop works and we’ll recommend the right RepairPOS setup.
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
