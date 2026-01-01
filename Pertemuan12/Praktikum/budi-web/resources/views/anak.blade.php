<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Daftar Anak - Yayasan Budi Rahayu Al Barokah</title>
  <meta name="description" content="Daftar anak asuh Yayasan Budi Rahayu Al Barokah. Temukan profil anak-anak yang membutuhkan dukungan dan bantuan untuk masa depan mereka yang lebih baik." />
  <meta name="keywords" content="anak asuh, daftar anak panti, profil anak, bantuan anak yatim, Budi Rahayu Al Barokah" />
  <meta name="author" content="Yayasan Budi Rahayu Al Barokah" />
  <meta name="robots" content="index, follow" />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://yayasan-budi-rahayu.vercel.app/anak.html" />
  <meta property="og:title" content="Daftar Anak - Yayasan Budi Rahayu Al Barokah" />
  <meta property="og:description" content="Daftar anak asuh Yayasan Budi Rahayu Al Barokah. Temukan profil anak-anak yang membutuhkan dukungan." />
  <meta property="og:image" content="https://yayasan-budi-rahayu.vercel.app/img/logo_panti.png" />

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://yayasan-budi-rahayu.vercel.app/anak.html" />
  <meta property="twitter:title" content="Daftar Anak - Yayasan Budi Rahayu Al Barokah" />
  <meta property="twitter:description" content="Daftar anak asuh Yayasan Budi Rahayu Al Barokah. Temukan profil anak-anak yang membutuhkan dukungan." />
  <meta property="twitter:image" content="https://yayasan-budi-rahayu.vercel.app/img/logo_panti.png" />

  <link rel="stylesheet" href="css/style-awal.css" />
  <!-- CSS khusus halaman anak -->
  <link rel="stylesheet" href="css/style-anak.css" />
  <link rel="stylesheet" href="css/transitions.css" />
  <link rel="stylesheet" href="css/Hamburger/Hamburger.css">
  <link rel="stylesheet" href="css/Hamburger/responsivZ.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="js/transitions.js" defer></script>
  <script src="js/Hamburger/responsive.js" defer></script>

  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'GA_MEASUREMENT_ID');
  </script>
</head>
<body>

<!-- ===== Navbar ===== -->
  <header class="navbar">
    <div class="container nav-content">
      <div class="nav-left">
        <img src="img/logo_panti.png" alt="Logo Yayasan" class="logo" />
      </div>
      <button class="nav-toggle" aria-label="Toggle menu" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <nav class="nav-links nav-menu">
        <button class="nav-close" aria-label="Close menu">&times;</button>
        <a href="index.html">Beranda</a>
        <a href="tentang-kami.html">Tentang</a>
        <a href="donasi.html">Donasi</a>
        <a href="berita.html">Berita</a>
        <a href="kontak-kami.html">Kontak Kami</a>
        <a href="anak.html" class="active">Anak</a>
        <a href="login.html" class="bg-white text-primary px-4 py-2 rounded-lg hover:bg-gray-200 hover:text-primary-dark transition duration-300 font-semibold">Login</a>
      </nav>
    </div>
  </header>


  <!-- ===== HERO ===== -->
  <section class="anak-hero fade-in-refresh">
    <div class="container">
      <h1>Daftar Anak Asuh</h1>
      <p>Berikut adalah anak-anak di Yayasan Yatim Piatu Budi Rahayu Al Barokah. Gunakan fitur pencarian untuk menemukan anak tertentu.</p>

      <div class="anak-toolbar slide-in-up">
        <input id="searchInput" type="text" placeholder="Cari nama anak..." aria-label="Cari nama anak" />
        <div class="toolbar-right">
          <label class="perpage-label">
            Tampil:
            <select id="perPageSelect" aria-label="Jumlah item per halaman">
              <option value="12" selected>12</option>
              <option value="18">18</option>
              <option value="26">26</option>
              <option value="1000">Semua</option>
            </select>
          </label>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== GRID LIST ===== -->
  <main class="container slide-in-up">
    <div id="anakGrid" class="anak-grid" aria-live="polite"></div>
    <div id="pagination" class="pagination"></div>
  </main>

  <!-- ===== FOOTER (copy dari index) ===== -->
  <footer class="footer">
    <div class="container footer-content">
      <div class="footer-col logo-col">
        <img src="img/logo_panti.png" alt="Logo Yayasan" class="footer-logo">
        <p class="footer-title">Yayasan Yatim Piatu<br>Budi Rahayu Al Barokah</p>
      </div>

      <div class="footer-col menu-col">
        <a href="tentang-kami.html">Tentang</a>
        <a href="donasi.html">Donasi</a>
        <a href="berita.html">Berita</a>
        <a href="kontak-kami.html">Kontak Kami</a>
        <a href="anak.html">Anak</a>
      </div>

      <div class="footer-col address-col">
        <p>
          Gg. Teratai, Kober,<br>
          Kec. Purwokerto Barat,<br>
          Kabupaten Banyumas,<br>
          Jawa Tengah 53132
        </p>
      </div>

      <div class="footer-col contact-col">
        <h3>Contact Us</h3>
        <p><i class="bi bi-instagram"></i> @budirahayual_barokah</p>
        <p><i class="bi bi-whatsapp"></i> +62 815-4128-8412</p>
      </div>
    </div>
  </footer>

  <!-- ===== JS ===== -->
  <script src="js/anak.js"></script>
  <script>
    // Inisialisasi daftar anak di halaman anak.html
    AnakPage.initList({
      gridId: 'anakGrid',
      paginationId: 'pagination',
      searchId: 'searchInput',
      perPageId: 'perPageSelect'
    });
  </script>
</body>
</html>
