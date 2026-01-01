// donasi.js — interaksi sederhana halaman donasi
document.addEventListener('DOMContentLoaded', () => {
  const radios = document.querySelectorAll('input[name="amount"]');
  const otherWrapper = document.getElementById('other-amount-wrapper');
  const otherInput = document.getElementById('other-amount');
  const donateBtn = document.getElementById('donate-btn');

  // Tampilkan input “lainnya” jika dipilih
  radios.forEach(radio => {
    radio.addEventListener('change', () => {
      if (radio.value === 'other' && radio.checked) {
        otherWrapper.classList.remove('hidden');
        otherInput.focus();
      } else {
        otherWrapper.classList.add('hidden');
      }
    });
  });

  // Tombol donasi
  donateBtn.addEventListener('click', () => {
    // Validasi form
    const name = document.getElementById('donor-name').value.trim();
    const email = document.getElementById('donor-email').value.trim();
    const message = document.getElementById('donor-message').value.trim();

    if (!name) {
      alert('Harap isi bidang ini!');
      document.getElementById('donor-name').focus();
      return;
    }

    if (!email) {
      alert('Harap isi bidang ini!');
      document.getElementById('donor-email').focus();
      return;
    }

    // Validasi format email sederhana
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      alert('Format email tidak valid!');
      document.getElementById('donor-email').focus();
      return;
    }

    if (!message) {
      alert('Harap isi bidang ini!');
      document.getElementById('donor-message').focus();
      return;
    }

    let selected = document.querySelector('input[name="amount"]:checked');
    let amount = 0;
    if (selected) {
      amount = selected.value === 'other'
        ? parseInt(otherInput.value || 0)
        : parseInt(selected.value);
    }

    if (!amount || amount < 1000) {
      alert('Masukkan jumlah donasi minimal Rp1.000');
      return;
    }

    alert(`Terima kasih ${name}! Donasi Anda sebesar Rp${amount.toLocaleString()} akan segera diproses.`);
    // TODO: Ganti dengan redirect ke gateway pembayaran
  });
});
