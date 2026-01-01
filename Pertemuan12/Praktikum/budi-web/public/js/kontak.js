document.addEventListener("DOMContentLoaded", () => {
  const btnHubungi = document.getElementById("btnHubungi");
  const form = document.getElementById("contactForm");
  const status = document.getElementById("formStatus");

  // Tombol WhatsApp
  btnHubungi.addEventListener("click", () => {
    window.open("https://wa.me/6281541288412?text=Halo%20Yayasan%20Budi%20Rahayu%2C%20saya%20ingin%20bertanya%20lebih%20lanjut.", "_blank");
  });

  // Form handler (tanpa backend, hanya simulasi sukses)
  form.addEventListener("submit", (e) => {
    e.preventDefault();
    status.textContent = "Mengirim pesan...";
    status.style.color = "#05049F";

    setTimeout(() => {
      form.reset();
      status.textContent = "Pesan berhasil dikirim! Terima kasih telah menghubungi kami.";
      status.style.color = "green";
    }, 1500);
  });
});

// Inisialisasi Map Leaflet
var map = L.map('map').setView([-7.413998227266819, 109.2220257665295], 16); // Koordinat Purwokerto Barat

// Tambahkan tile layer dari OpenStreetMap
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  maxZoom: 19,
  attribution: '&copy; OpenStreetMap contributors'
}).addTo(map);

// Tambahkan marker dan popup
var marker = L.marker([-7.413998227266819, 109.2220257665295]).addTo(map);
marker.bindPopup("<b>Yayasan Budi Rahayu Al Barokah</b><br>Gg. Teratai, Kober<br>Purwokerto Barat, Jawa Tengah").openPopup();

// Form kirim pesan (dummy)
document.getElementById("contactForm").addEventListener("submit", function(e) {
  e.preventDefault();
  document.getElementById("status").innerText = "Pesan berhasil dikirim! (Simulasi)";
  this.reset();
});

