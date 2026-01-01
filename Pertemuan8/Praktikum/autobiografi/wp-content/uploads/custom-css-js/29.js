<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function () {
  // modal controls
  const thumbBtn = document.getElementById("cvThumbBtn");
  const modal = document.getElementById("cvModal");
  const closeBtn = document.getElementById("cvClose");
  const backdrop = document.querySelector(".cv-modal-backdrop");

  if (!thumbBtn || !modal || !closeBtn) return;

  function openModal() {
    modal.setAttribute("aria-hidden", "false");
    // trap focus could be added later
  }
  function closeModal() {
    modal.setAttribute("aria-hidden", "true");
  }

  thumbBtn.addEventListener("click", openModal);
  closeBtn.addEventListener("click", closeModal);
  backdrop && backdrop.addEventListener("click", closeModal);
  document.addEventListener("keydown", function(e){
    if(e.key === "Escape" && modal.getAttribute("aria-hidden")==="false") closeModal();
  });
});
</script>
<!-- end Simple Custom CSS and JS -->
