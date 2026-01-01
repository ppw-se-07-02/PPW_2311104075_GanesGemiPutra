<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function () {
  const thumbBtn = document.getElementById("cvThumbBtn");
  const modal = document.getElementById("cvModal");
  const closeBtn = document.getElementById("cvClose");
  const backdrop = document.querySelector(".cv-modal-backdrop");
  if (!thumbBtn || !modal || !closeBtn) return;

  function openModal() {
    modal.setAttribute("aria-hidden", "false");
    // focus for accessibility
    closeBtn.focus();
  }
  function closeModal() {
    modal.setAttribute("aria-hidden", "true");
    thumbBtn.focus();
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
