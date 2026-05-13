<?php
$pageTitle = "Contact RepairPOS | Book a Demo";
$pageDescription = "Contact RepairPOS to book a demo or start a free trial of POS and job management software for repair shops.";
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'partials/head.php'; ?>

<body class="d-flex flex-column min-vh-100">

<?php include 'partials/header.php'; ?>

<main class="flex-shrink-0">

  <header class="contact-banner">
    <div class="container px-4 px-lg-5">
      <div class="contact-banner-content">
        <div class="eyebrow">Contact RepairPOS</div>

        <h1>Book a demo.</h1>

        <p>
          Tell us about your repair shop and we’ll help you
          find the right setup.
        </p>
      </div>
    </div>
  </header>

  <section class="contact-section">
    <div class="container px-4 px-lg-5">
      <div class="row g-4 align-items-stretch">

        <div class="col-lg-7">
          <div class="pricing-card contact-form-card h-100">
            <div class="mb-4">
              <h2 class="fw-bold mb-2 text-white">Get in touch</h2>
              <p class="text-muted-custom mb-0">
                Send us your details and we’ll get back to you.
              </p>
            </div>


              <form id="contactForm" action="send-contact.php" method="POST">
                <div class="row g-3">

                <div class="col-md-6">
                  <label class="form-label" for="name">Full name</label>
                  <input class="form-control" id="name" name="name" type="text" placeholder="Your name" required>
                </div>

                <div class="col-md-6">
                  <label class="form-label" for="business">Business name</label>
                  <input class="form-control" id="business" name="business" type="text" placeholder="Your business" required>
                </div>

                <div class="col-md-6">
                  <label class="form-label" for="email">Email</label>
                  <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" required>
                </div>

                <div class="col-md-6">
                  <label class="form-label" for="phone">Phone</label>
                  <input class="form-control" id="phone" name="phone" type="tel" placeholder="Optional">
                </div>

                <div class="col-12">
                  <label class="form-label" for="industry">Business type</label>
                  <select class="form-select" id="industry" name="industry">
                    <option value="">Select an option</option>
                    <option>Dry cleaning</option>
                    <option>Shoe repair</option>
                    <option>Bag or leather repair</option>
                    <option>Tailoring or alterations</option>
                    <option>Computer repair</option>
                    <option>iPhone or phone repair</option>
                    <option>Other repair business</option>
                  </select>
                </div>

                <div class="col-12">
                  <label class="form-label" for="message">Message</label>
                  <textarea class="form-control" id="message" name="message" rows="5" placeholder="Tell us what you need help with" required></textarea>
                </div>

                <div class="col-12 d-grid">
                  <button class="btn btn-primary btn-lg" type="submit">Send enquiry</button>
                </div>

                <?php if (isset($_GET['success'])): ?>
  <div class="alert alert-success">
    Thanks — your enquiry has been sent.
  </div>
<?php endif; ?>

<?php if (isset($_GET['error'])): ?>
  <div class="alert alert-danger">
    Sorry, something went wrong. Please email hello@repairpos.co.
  </div>
<?php endif; ?>

              </div>
            </form>
          </div>
        </div>

        <div class="col-lg-5">
          <div class="pricing-card contact-side-card h-100">
            <div class="feature-side-header">
              <div class="feature-icon">
                <i class="bi bi-shop"></i>
              </div>

              <p class="feature-side-title">
                Core Features
              </p>
            </div>

            <p class="text-muted-custom mb-4">
              RepairPOS gives repair shops the tools to manage jobs from intake to pickup, without juggling paper tickets, spreadsheets or separate systems.
            </p>

            <ul class="check-list">
              <li><i class="bi bi-check-circle"></i>Digital job tickets</li>
              <li><i class="bi bi-check-circle"></i>Customer records and repair history</li>
              <li><i class="bi bi-check-circle"></i>Job photos, notes and item details</li>
              <li><i class="bi bi-check-circle"></i>Quotes, invoices and payments</li>
              <li><i class="bi bi-check-circle"></i>Job status from drop-off to pickup</li>
              <li><i class="bi bi-check-circle"></i>Email and SMS customer updates</li>
              <li><i class="bi bi-check-circle"></i>Staff accounts and job assignment</li>
              <li><i class="bi bi-check-circle"></i>Fast search by name, phone or job number</li>
              <li><i class="bi bi-check-circle"></i>Payment integrations</li>
            </ul>

            <div class="contact-email-box">
              <div class="small text-muted-custom mb-1">Prefer email?</div>
              <a href="mailto:hello@repairpos.co">hello@repairpos.co</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

</main>

<?php include 'partials/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
