# Tugas Modul 6 - JavaScript & jQuery

## Struktur
- `index.html` : Halaman utama (berisi 4 tugas)
- `style.css`  : Styling sederhana agar tampilan rapi
- `script.js`  : Implementasi JavaScript + jQuery

## Cara Menjalankan
1. Buka `index.html` di browser (Chrome/Edge/Firefox).
2. Pastikan internet aktif (karena memuat jQuery CDN).

## Komponen yang Digunakan
### JavaScript (Tugas 1)
- Array of object `barang` (nama, harga, jumlah)
- DOM manipulation: membuat elemen daftar barang secara dinamis
- Event handling: tombol **Hitung Total Harga**
- Perhitungan total dengan `forEach()` dan format rupiah dengan `toLocaleString("id-ID")`

### jQuery (Tugas 2-4)
- `$(document).ready()` menjalankan kode setelah DOM siap
- `.text()` mengganti teks (Tugas 2)
- `.click()` menangani event klik (Tugas 3 & 4)
- `.addClass()` mengubah tampilan elemen (Tugas 3)
- `.fadeOut()` dan `.fadeIn()` untuk efek animasi (Tugas 4)
