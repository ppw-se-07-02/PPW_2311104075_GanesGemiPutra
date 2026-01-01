// berita-detail.js
document.addEventListener('DOMContentLoaded', () => {
  console.log("Halaman Berita Detail siap!");
  
  // Contoh: animasi halus saat scroll
  const elements = document.querySelectorAll('.news-content p, .gallery-item, .share-section');
  const reveal = () => {
    elements.forEach(el => {
      const rect = el.getBoundingClientRect();
      if (rect.top < window.innerHeight - 50) {
        el.classList.add('visible');
      }
    });
  };
  window.addEventListener('scroll', reveal);
  reveal();
});
