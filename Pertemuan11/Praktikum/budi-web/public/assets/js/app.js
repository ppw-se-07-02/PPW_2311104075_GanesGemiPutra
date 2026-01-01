// Unguided Modul 11 - Asset Demo
document.addEventListener('DOMContentLoaded', () => {
  const btn = document.getElementById('btnHello');
  const msg = document.getElementById('msg');
  if (!btn || !msg) return;

  btn.addEventListener('click', () => {
    const now = new Date().toLocaleString();
    msg.textContent = `JS dari public/assets/js/app.js berhasil dimuat ✅ (${now})`;
  });
});
