<div class="modal fade how-preview-modal" id="appScreenshotPreview" tabindex="-1" aria-labelledby="appScreenshotPreviewTitle" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen"><div class="modal-content">
    <div class="modal-header">
      <div><h2 class="modal-title fs-5" id="appScreenshotPreviewTitle">RepairPOS preview</h2><p class="small mb-0">RepairPOS demo · Sample data</p></div>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close screenshot"></button>
    </div>
    <div class="modal-body d-flex"><img id="appScreenshotPreviewImage" class="img-fluid d-block m-auto" alt=""></div>
  </div></div>
</div>
<script>
  document.getElementById('appScreenshotPreview').addEventListener('show.bs.modal', function (event) {
    const trigger = event.relatedTarget;
    if (!trigger) return;
    document.getElementById('appScreenshotPreviewTitle').textContent = trigger.dataset.title;
    const preview = document.getElementById('appScreenshotPreviewImage');
    preview.src = trigger.dataset.screen;
    preview.alt = trigger.dataset.alt;
    this.querySelector('.modal-body').scrollTop = 0;
  });
</script>
