// ===== POPUP MODAL FUNCTIONALITY =====
$(document).ready(function() {
  // Create popup modal HTML
  const popupHTML = `
    <div id="popupModal" class="popup-modal">
      <div class="popup-content">
        <button class="popup-close" aria-label="Close popup">&times;</button>
        <img id="popupImage" class="popup-image" src="" alt="Popup Image">
      </div>
    </div>
  `;

  // Append popup to body
  $('body').append(popupHTML);

  // Get popup elements
  const $popupModal = $('#popupModal');
  const $popupImage = $('#popupImage');
  const $popupClose = $('.popup-close');

  // Function to open popup
  function openPopup(imageSrc, altText) {
    $popupImage.attr('src', imageSrc);
    $popupImage.attr('alt', altText || 'Popup Image');
    $popupModal.addClass('show');

    // Prevent body scroll when popup is open
    $('body').css('overflow', 'hidden');

    // Focus management for accessibility
    $popupClose.focus();

    // Close popup when clicking outside the image
    $popupModal.on('click.popup', function(e) {
      if (e.target === this) {
        closePopup();
      }
    });
  }

  // Function to close popup
  function closePopup() {
    $popupModal.removeClass('show');

    // Restore body scroll
    $('body').css('overflow', '');

    // Remove click outside handler
    $popupModal.off('click.popup');

    // Return focus to the triggering element if available
    if (window.popupTrigger) {
      window.popupTrigger.focus();
      window.popupTrigger = null;
    }
  }

  // Event listeners
  // Close popup with close button
  $popupClose.on('click', function(e) {
    e.stopPropagation();
    closePopup();
  });

  // Close popup with ESC key
  $(document).on('keydown', function(e) {
    if (e.key === 'Escape' && $popupModal.hasClass('show')) {
      closePopup();
    }
  });

  // Make popup functionality globally available
  window.openPopup = openPopup;
  window.closePopup = closePopup;

  // Auto-bind click events to gallery images
  $('.gallery-grid img').on('click', function() {
    const imageSrc = $(this).attr('src');
    const altText = $(this).attr('alt');
    window.popupTrigger = this;
    openPopup(imageSrc, altText);
  });

  // Add cursor pointer to clickable images
  $('.gallery-grid img').css('cursor', 'pointer');
});
