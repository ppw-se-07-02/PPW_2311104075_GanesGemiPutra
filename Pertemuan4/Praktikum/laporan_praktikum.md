# BAB I
## PENDAHULUAN (Praktikum Terbimbing)

### Dasar Teori

Pengembangan website e-commerce merupakan salah satu aplikasi praktis dari teknologi web modern yang menggabungkan berbagai bahasa pemrograman dan framework untuk menciptakan pengalaman pengguna yang interaktif dan responsif. Dalam praktikum ini, materi dasar yang mendasari adalah pengembangan front-end menggunakan HTML, CSS, dan JavaScript, yang diperkaya dengan framework Bootstrap untuk memastikan desain responsif.

HTML (HyperText Markup Language) berfungsi sebagai fondasi struktur website, menyediakan elemen-elemen seperti header, navigation, section, dan footer yang membentuk kerangka halaman. CSS (Cascading Style Sheets) bertanggung jawab atas presentasi visual, termasuk layout, warna, tipografi, dan animasi, yang memungkinkan pembuatan desain yang menarik dan konsisten. JavaScript menambahkan interaktivitas dinamis, seperti slider otomatis, modal untuk gambar produk, fitur pencarian real-time, dan update waktu secara live, yang meningkatkan engagement pengguna.

Bootstrap, sebagai framework CSS yang populer, menyediakan komponen siap pakai seperti navbar, grid system, dan card, yang mempercepat pengembangan dan memastikan kompatibilitas lintas perangkat. Konsep responsive design menjadi krusial dalam era mobile-first, di mana website harus dapat menyesuaikan tampilan pada berbagai ukuran layar (desktop, tablet, smartphone) menggunakan media queries dan flexbox.

Secara lebih mendalam, praktikum ini juga mengimplementasikan prinsip-prinsip UX/UI (User Experience/User Interface) dengan fokus pada aksesibilitas (ARIA labels, semantic HTML), performa (lazy loading gambar, optimasi CSS), dan SEO-friendly structure. Font Awesome dan Google Fonts digunakan untuk ikonografi dan tipografi yang konsisten, sementara integrasi CDN mempercepat loading halaman. Fitur-fitur seperti carousel slider, product filtering, dan modal popup menunjukkan penerapan JavaScript ES6+ dengan event listeners dan DOM manipulation, yang merupakan standar modern dalam pengembangan web.

### Tujuan

Tujuan utama dari praktikum ini adalah untuk mengembangkan kemampuan mahasiswa dalam membangun website e-commerce yang fungsional dan responsif menggunakan teknologi web front-end. Secara spesifik, praktikum ini bertujuan untuk:

1. Memahami dan mengimplementasikan struktur HTML yang semantic dan aksesibel untuk website e-commerce.
2. Menguasai teknik styling CSS dan framework Bootstrap untuk menciptakan desain yang menarik dan responsif.
3. Mengembangkan interaktivitas website menggunakan JavaScript, termasuk fitur slider, pencarian, dan modal.
4. Menerapkan prinsip-prinsip UX/UI dalam pengembangan website yang user-friendly.
5. Mengintegrasikan berbagai library dan CDN untuk meningkatkan performa dan fungsionalitas website.

# BAB II
## HASIL

### Deskripsi Website yang Dibangun

Website e-commerce "Varsity Elite" yang dikembangkan dalam praktikum ini merupakan platform penjualan jaket varsity khusus untuk tim esport Indonesia. Website ini dibangun menggunakan teknologi front-end modern dengan fokus pada desain responsif dan interaktivitas pengguna.

### Struktur dan Fitur Utama

Website terdiri dari beberapa komponen utama:

1. **Header dan Navigation**: Navbar responsif dengan logo, menu navigasi, live date/time, search bar, wishlist, cart, dan theme toggle.

2. **Hero Slider**: Carousel otomatis dengan tiga slide yang menampilkan produk unggulan, custom order, dan material premium.

3. **Banner Promosi**: Bagian banner untuk promosi khusus.

4. **Produk Pilihan**: Grid produk dengan badge (Hot, New, Sale), rating, harga, dan tombol add to cart.

5. **Rekomendasi Produk**: Sidebar dengan produk terpopuler bulan ini.

6. **Features Section**: Empat fitur layanan (Gratis Pengiriman, Garansi 2 Tahun, Dukungan 24/7, Pengembalian Mudah).

7. **Newsletter Subscription**: Form pendaftaran newsletter.

8. **Footer**: Informasi kontak, link sosial media, dan copyright.

### Teknologi dan Library yang Digunakan

- **HTML5**: Struktur semantic dengan elemen seperti `<header>`, `<main>`, `<section>`, `<footer>`.
- **CSS3**: Styling responsif dengan media queries, flexbox, grid, dan animasi.
- **Bootstrap 5.3.3**: Framework untuk komponen UI dan grid system.
  - **Navbar**: Komponen navigasi responsif dengan collapse untuk mobile. Digunakan untuk header website dengan menu navigasi yang dapat dilipat pada layar kecil.
  - **Grid System**: Container, row, dan col untuk layout responsif. Digunakan untuk mengatur layout produk dalam grid yang menyesuaikan ukuran layar.
  - **Modal**: Komponen popup untuk menampilkan gambar produk. Digunakan untuk menampilkan gambar produk dalam ukuran besar saat diklik.
  - **Button**: Berbagai variasi tombol (btn-primary, btn-outline). Digunakan untuk tombol aksi seperti "Lihat Koleksi", "Pesan Sekarang", dan "Berlangganan".
  - **Form**: Input dan button untuk search dan newsletter. Digunakan untuk form pencarian produk dan pendaftaran newsletter.
  - **Utility Classes**: Spacing (p-, m-), text alignment, display utilities. Digunakan untuk mengatur jarak, alignment teks, dan visibility elemen.
- **JavaScript ES6+**: Interaktivitas seperti slider, modal, search filter, dan live clock.
- **Font Awesome 6.4.0**: Ikon untuk UI elements.
- **Google Fonts**: Tipografi Montserrat dan Bebas Neue.
- **CDN**: Penggunaan CDN untuk Bootstrap, Font Awesome, dan Google Fonts.

### Fitur Interaktif

1. **Slider Otomatis**: Carousel dengan navigasi manual dan auto-slide setiap 5 detik.
2. **Modal Gambar Produk**: Klik gambar produk untuk melihat dalam modal popup.
3. **Search Filter**: Pencarian real-time untuk filter produk berdasarkan nama.
4. **Live Date/Time**: Update waktu Jakarta secara real-time.
5. **Theme Toggle**: Tombol untuk mengubah tema (placeholder untuk dark mode).
6. **Responsive Design**: Layout yang menyesuaikan dari desktop hingga mobile.

### File Struktur

```
/
├── index.html          # File utama HTML
├── style.css           # Styling utama
├── assets/
│   └── css/
│       └── style.css   # Styling tambahan (jika ada)
└── scroll-animation.js # Script animasi scroll (referenced in HTML)
```

### Hasil Implementasi

Website berhasil diimplementasikan dengan semua fitur berfungsi sesuai spesifikasi praktikum. Layout responsif bekerja optimal pada berbagai ukuran layar, interaktivitas JavaScript berjalan lancar, dan integrasi Bootstrap memastikan konsistensi desain. Aksesibilitas ditingkatkan dengan penggunaan ARIA labels dan semantic HTML, sementara performa dioptimalkan melalui lazy loading gambar dan penggunaan CDN.
