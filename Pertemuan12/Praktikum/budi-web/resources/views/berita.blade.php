<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yayasan Budi Rahayu - Berita</title>
  <meta name="description" content="Kabar terbaru seputar kegiatan dan informasi Yayasan Budi Rahayu. Baca berita tentang kegiatan anak-anak panti, bakti sosial, dan perkembangan yayasan." />
  <meta name="keywords" content="berita panti, kegiatan anak panti, bakti sosial, informasi yayasan, Budi Rahayu Al Barokah" />
  <meta name="author" content="Yayasan Budi Rahayu Al Barokah" />
  <meta name="robots" content="index, follow" />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://yayasan-budi-rahayu.vercel.app/berita.html" />
  <meta property="og:title" content="Yayasan Budi Rahayu - Berita" />
  <meta property="og:description" content="Kabar terbaru seputar kegiatan dan informasi Yayasan Budi Rahayu." />
  <meta property="og:image" content="https://yayasan-budi-rahayu.vercel.app/img/logo_panti.png" />

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://yayasan-budi-rahayu.vercel.app/berita.html" />
  <meta property="twitter:title" content="Yayasan Budi Rahayu - Berita" />
  <meta property="twitter:description" content="Kabar terbaru seputar kegiatan dan informasi Yayasan Budi Rahayu." />
  <meta property="twitter:image" content="https://yayasan-budi-rahayu.vercel.app/img/logo_panti.png" />

  <link rel="stylesheet" href="css/style-berita.css">
  <link rel="stylesheet" href="css/transitions.css">
  <link rel="stylesheet" href="css/Hamburger/Hamburger.css">
  <link rel="stylesheet" href="css/Hamburger/responsivZ.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
        <a href="berita.html" class="active">Berita</a>
        <a href="kontak-kami.html">Kontak Kami</a>
        <a href="anak.html" class=>Anak</a>
        <a href="login.html" class="bg-white text-primary px-4 py-2 rounded-lg hover:bg-gray-200 hover:text-primary-dark transition duration-300 font-semibold">Login</a>
      </nav>
    </div>
  </header>

  <!-- ===== Judul Halaman ===== -->
  <section class="page-header fade-in-refresh">
    <div class="container">
      <h1>Berita</h1>
      <p>Kabar terbaru seputar kegiatan dan informasi Yayasan Budi Rahayu.</p>
    </div>
  </section>

  <!-- ===== Daftar Berita ===== -->
  <section class="news-section">
    <div class="container">

      <!-- Berita 1 -->
      <div class="news-card slide-in-left">
        <img src="img/berita1.png" alt="Gambar Berita" class="news-img">
        <div class="news-content">
          <h3>Judul Berita Lorem Ipsum Dolor Sit Amet, Consectetur</h3>
          <p class="date">25 Januari 2025</p>
          <p class="desc">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer egestas, libero nec bibendum euismod, justo lorem pellentesque dolor, non luctus turpis nunc et augue...
          </p>
          <a href="berita-detail.html?id=1" class="read-more">Baca selengkapnya <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <!-- Berita 2 -->
      <div class="news-card slide-in-right">
        <img src="img/berita2.png" alt="Gambar Berita" class="news-img">
        <div class="news-content">
          <h3>Kegiatan Bakti Sosial Bersama Mahasiswa Universitas Lokal</h3>
          <p class="date">10 Februari 2025</p>
          <p class="desc">
            Kegiatan bakti sosial ini diikuti oleh mahasiswa yang berkontribusi memberikan donasi dan kebahagiaan kepada anak-anak panti. Suasana penuh keceriaan dan haru...
          </p>
          <a href="berita-detail.html?id=2" class="read-more">Baca selengkapnya <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <!-- Berita 3 -->
      <div class="news-card slide-in-left">
        <img src="img/berita3.png" alt="Gambar Berita" class="news-img">
        <div class="news-content">
          <h3>Perayaan Hari Anak Nasional di Yayasan Budi Rahayu</h3>
          <p class="date">23 Juli 2025</p>
          <p class="desc">
            Dalam rangka Hari Anak Nasional, anak-anak panti mengikuti lomba menggambar dan menyanyi. Acara ini menjadi sarana menumbuhkan kepercayaan diri dan kreativitas mereka...
          </p>
          <a href="berita-detail.html?id=3" class="read-more">Baca selengkapnya <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

    </div>
  </section>

  <!-- ===== Footer ===== -->
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

  <script src="js/berita.js"></script>
</body>
</html>
