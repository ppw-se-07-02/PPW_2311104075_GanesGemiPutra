<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Yayasan Budi Rahayu - Halaman Awal</title>
  <meta name="description" content="Selamat datang di Yayasan Budi Rahayu Al Barokah. Panti asuhan yang berkomitmen membimbing anak-anak yatim piatu menuju masa depan yang lebih baik dengan pendidikan dan kasih sayang." />
  <meta name="keywords" content="yayasan budi rahayu, panti asuhan, anak yatim piatu, donasi anak panti, Purwokerto, Banyumas" />
  <meta name="author" content="Yayasan Budi Rahayu Al Barokah" />
  <meta name="robots" content="index, follow" />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://yayasan-budi-rahayu.vercel.app/" />
  <meta property="og:title" content="Yayasan Budi Rahayu - Halaman Awal" />
  <meta property="og:description" content="Selamat datang di Yayasan Budi Rahayu Al Barokah. Panti asuhan yang berkomitmen membimbing anak-anak yatim piatu menuju masa depan yang lebih baik." />
  <meta property="og:image" content="https://yayasan-budi-rahayu.vercel.app/img/logo_panti.png" />

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://yayasan-budi-rahayu.vercel.app/" />
  <meta property="twitter:title" content="Yayasan Budi Rahayu - Halaman Awal" />
  <meta property="twitter:description" content="Selamat datang di Yayasan Budi Rahayu Al Barokah. Panti asuhan yang berkomitmen membimbing anak-anak yatim piatu menuju masa depan yang lebih baik." />
  <meta property="twitter:image" content="https://yayasan-budi-rahayu.vercel.app/img/logo_panti.png" />

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="css/style-awal.css" />
  <link rel="stylesheet" href="css/transitions.css" />
  <link rel="stylesheet" href="css/popup.css" />
  <link rel="stylesheet" href="css/Hamburger/Hamburger.css" />
  <link rel="stylesheet" href="css/Hamburger/responsivZ.css" />
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="js/transitions.js" defer></script>
  <script src="js/Hamburger/responsive.js" defer></script>
  <script src="js/popup.js" defer></script>

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
        <a href="index.html" class="active">Beranda</a>
        <a href="tentang-kami.html">Tentang</a>
        <a href="donasi.html">Donasi</a>
        <a href="berita.html">Berita</a>
        <a href="kontak-kami.html">Kontak Kami</a>
        <a href="anak.html">Anak</a>
        <a href="login.html" class="bg-white text-primary px-4 py-2 rounded-lg hover:bg-gray-200 hover:text-primary-dark transition duration-300 font-semibold">Login</a>
      </nav>
    </div>
  </header>

  <!-- ===== Hero Section ===== -->
  <section class="hero fade-in-refresh">
    <div class="container hero-content">
      <div class="hero-text">
        <h1>Selamat Datang di Yayasan Budi Rahayu</h1>
        <p>Rumah kasih dan harapan bagi anak-anak yang membutuhkan. Kami berkomitmen membimbing mereka menjadi generasi yang mandiri dan berakhlak.</p>
        <a href="tentang-kami.html" class="btn-primary">Pelajari Lebih Lanjut</a>
      </div>
      <div class="hero-image">
        <img src="img/IMG_9380.png" alt="Anak-anak Yayasan" />
      </div>
    </div>
  </section>

  <!-- ===== Tentang Yayasan ===== -->
  <section class="about">
    <div class="container about-content">
      <div class="about-image slide-in-left">
        <img src="img/IMG_8182.png" alt="Kegiatan Yayasan" />
      </div>
      <div class="about-text slide-in-right">
        <h2>Tentang Yayasan Kami</h2>
        <p>
          Yayasan Budi Rahayu berdiri untuk membantu anak-anak yang membutuhkan tempat tinggal, pendidikan, dan kasih sayang.
          Kami percaya bahwa setiap anak berhak mendapatkan masa depan yang cerah.
        </p>
        <a href="tentang-kami.html" class="btn-secondary">Baca Selengkapnya</a>
      </div>
    </div>
  </section>

  <!-- ===== Galeri ===== -->
  <section class="gallery">
    <div class="container">
      <h2>Kegiatan Anak-Anak</h2>
      <div class="gallery-grid">
        <img src="img/kegiatan_anak1.jpg" alt="Kegiatan 1">
        <img src="img/Kegiatan Bakti Sosial dari Universitas Muhammadiyah Purwokerto✨🤗.png" alt="Kegiatan 2">
        <img src="img/Trimakasih untuk TK KB Al Irsyad purwokerto serta komite TK KB Al Irsyad purwokerto.png" alt="Kegiatan 3">
        <img src="img/Trimakasih banyak @pegadaianareapurwokerto 🥰🥰🥰🙏🏻🙏🏻🙏🏻🫶🏻🫶🏻🫶🏻.png" alt="Kegiatan 4">
      </div>
      <p class="gallery-instruction">Klik Gambar Untuk Melihat Gambar</p>
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

  <!-- ===== Javascript ===== -->
   


</body>
</html>
