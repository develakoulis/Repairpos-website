<footer>
  <div class="container px-4 px-lg-5">

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">

      <div>
        <div class="footer-brand">RepairPOS</div>
        <div class="small">
          Copyright &copy; RepairPOS <?php echo date('Y'); ?>
        </div>
      </div>

      <div class="footer-links">
        <a href="/how-it-works">How It Works</a>
        <a href="/repairpos-guides">User Guides</a>
        <a href="index.php#features">Features</a>
        <a href="contact.php">Contact</a>
      </div>

    </div>

  </div>
</footer>

<?php if (!empty($hasAppScreenshots)) include __DIR__ . '/app-screenshot-viewer.php'; ?>
