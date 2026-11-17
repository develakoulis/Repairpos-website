
<?php
$pageTitle = "RepairPOS Case Studies | Repair Shops Using RepairPOS";
$pageDescription = "Read how Evans uses RepairPOS for shoe, bag and leather repairs in its Melbourne workshop.";
?>

<!DOCTYPE html>
<html lang="en">

<?php include dirname(__DIR__) . '/partials/head.php'; ?>

<body class="d-flex flex-column">

  <?php include dirname(__DIR__) . '/partials/header.php'; ?>

<style>
  .cases-page {
    padding: 5rem 0;
  }

  .cases-intro {
    max-width: 760px;
    margin-bottom: 3rem;
  }

  .cases-intro .eyebrow {
    color: #c6a15b;
  }

  .cases-intro h1 {
    font-size: 3rem;
    line-height: 1.05;
    font-weight: 800;
    letter-spacing: -0.03em;
    margin-bottom: 1rem;
  }

  .cases-intro p {
    color: rgba(255,255,255,.74);
    font-size: 1.08rem;
    line-height: 1.7;
    margin-bottom: 0;
  }

  .case-card {
    overflow: hidden;
  }

  .case-card img {
    width: 100%;
    height: 300px;
    object-fit: cover;
  }

  .case-card .industry-content {
    padding: 2.5rem;
    text-align: left;
  }

  .case-card .eyebrow {
    color: #c6a15b;
  }

  .case-card h2 {
    font-size: 2rem;
    font-weight: 800;
    letter-spacing: -0.02em;
    margin-bottom: 1rem;
  }

  .case-card p {
    font-size: 1.05rem;
    line-height: 1.75;
    margin-bottom: 1.5rem;
  }

  .case-card .badge {
    background: rgba(255,255,255,.12);
    border: 1px solid rgba(255,255,255,.15);
    color: #fff;
    font-weight: 500;
  }

  @media (max-width: 768px) {
    .cases-page {
      padding: 3.5rem 0;
    }

    .cases-intro h1 {
      font-size: 2.3rem;
    }

    .case-card img {
      height: 220px;
    }

    .case-card .industry-content {
      padding: 1.75rem;
    }
  }
</style>

<main class="flex-shrink-0">

  <section class="cases-page">
    <div class="container px-4 px-lg-5">

      <div class="cases-intro">

        <div class="eyebrow mb-3">
          RepairPOS Case Studies
        </div>

        <h1>
          RepairPOS case studies
        </h1>

        <p>
          Read how repair shops use RepairPOS to book customer jobs, track workshop repairs and manage payments. The Evans case study looks at shoe, bag and leather repairs.
        </p>

      </div>

      <div class="row g-4">

        <div class="col-lg-6">

          <div class="industry-card case-card">

            <a href="/case-studies/evans-shoe-bag-repair">
              <img
                src="/assets/images/evans-shoe-repair-case-study-hero.png"
                alt="Evans Leather Restoration RepairPOS case study">
            </a>

            <div class="industry-content">

              <div class="eyebrow mb-3">
                Melbourne, Australia
              </div>

              <h2>
                Evans - Quality Shoe, Bag & Leather Repairs
              </h2>

              <p>
                Evans has repaired shoes, bags and leather goods in Melbourne since 1956. Read how its team uses RepairPOS at the counter and in the workshop.
              </p>

              <div class="d-flex flex-wrap gap-2 mb-4">
                <span class="badge">Shoe Repair</span>
                <span class="badge">Bag Restoration</span>
                <span class="badge">Leather Repairs</span>
              </div>

<a href="/case-studies/evans-shoe-bag-repair">
                  Read the case study
              </a>

            </div>

          </div>

        </div>

      </div>

    </div>
  </section>

  <section class="pb-5">
    <div class="container px-4 px-lg-5">

      <div class="cta-bar">

        <div class="row align-items-center g-4">

          <div class="col-lg-8">
            <div class="d-flex align-items-start gap-3">

              <div class="feature-icon">
                <i class="bi bi-calendar-check"></i>
              </div>

              <div>
                <h2>Could this work for your shop?</h2>

                <p class="mb-0">
                  Book a demo and talk us through the repairs your team handles.
                </p>
              </div>

            </div>
          </div>

          <div class="col-lg-4 text-lg-end">
            <a class="btn btn-primary btn-lg" href="/contact">
              Book a Demo
            </a>
          </div>

        </div>

      </div>

    </div>
  </section>

</main>

<?php include dirname(__DIR__) . '/partials/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
