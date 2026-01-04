// ==============================
// TUGAS 1 (JavaScript): Hitung Total Harga Pembelian
// ==============================
const barang = [
  { nama: "Susu UHT", harga: 42000, jumlah: 10 },
  { nama: "Roti Tawar", harga: 30000, jumlah: 3 },
  { nama: "Mie Instan", harga: 20000, jumlah: 5 },
  { nama: "Sosis", harga: 51000, jumlah: 7 }
];

const listBarangEl = document.getElementById("listBarang");
const totalWrapEl = document.getElementById("totalWrap");
const btnHitungEl = document.getElementById("btnHitung");

// render daftar barang (dinamis)
barang.forEach(item => {
  const div = document.createElement("div");
  div.className = "barang-item";
  div.textContent = `${item.nama} — Rp ${item.harga.toLocaleString("id-ID")} × ${item.jumlah}`;
  listBarangEl.appendChild(div);
});

function hitungTotal() {
  let total = 0;
  barang.forEach(item => {
    total += item.harga * item.jumlah;
  });

  totalWrapEl.classList.remove("d-none");
  totalWrapEl.textContent = `Total harga pembelian adalah: Rp ${total.toLocaleString("id-ID")}`;
}

btnHitungEl.addEventListener("click", hitungTotal);

// ==============================
// TUGAS 2-4 (jQuery)
// ==============================
$(document).ready(function () {
  // Tugas 2: Ganti teks setelah halaman dimuat
  $("#teks").text("Halo Dunia dengan jQuery!");

  // Tugas 3: Tombol efek (ubah teks + style)
  $("#btnEfek").click(function () {
    $("#boxEfek")
      .text("Tombol sudah diklik!")
      .addClass("box-clicked");
  });

  // Tugas 4: Sembunyikan/Tampilkan kotak (fade)
  $("#btnSembunyi").click(function () {
    $("#kotak").fadeOut();
  });

  $("#btnTampil").click(function () {
    $("#kotak").fadeIn();
  });
});
