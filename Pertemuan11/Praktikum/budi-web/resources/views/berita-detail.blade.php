<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Berita Detail - Yayasan Budi Rahayu</title>
  <meta name="description" content="Baca berita lengkap tentang kegiatan dan perkembangan Yayasan Budi Rahayu Al Barokah. Informasi terbaru seputar anak-anak panti dan kegiatan sosial." />
  <meta name="keywords" content="berita detail, kegiatan panti, informasi yayasan, anak asuh, Budi Rahayu Al Barokah" />
  <meta name="author" content="Yayasan Budi Rahayu Al Barokah" />
  <meta name="robots" content="index, follow" />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="article" />
  <meta property="og:url" content="https://yayasan-budi-rahayu.vercel.app/berita-detail.html" />
  <meta property="og:title" content="Berita Detail - Yayasan Budi Rahayu" />
  <meta property="og:description" content="Baca berita lengkap tentang kegiatan dan perkembangan Yayasan Budi Rahayu Al Barokah." />
  <meta property="og:image" content="https://yayasan-budi-rahayu.vercel.app/img/logo_panti.png" />

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://yayasan-budi-rahayu.vercel.app/berita-detail.html" />
  <meta property="twitter:title" content="Berita Detail - Yayasan Budi Rahayu" />
  <meta property="twitter:description" content="Baca berita lengkap tentang kegiatan dan perkembangan Yayasan Budi Rahayu Al Barokah." />
  <meta property="twitter:image" content="https://yayasan-budi-rahayu.vercel.app/img/logo_panti.png" />

  <link rel="stylesheet" href="css/style-berita-detail.css">
  <link rel="stylesheet" href="css/transitions.css" />
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
        <img src="img/logo_panti.png" alt="Logo Yayasan" class="logo">
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
        <a href="anak.html">Anak</a>
        <a href="login.html" class="bg-white text-primary px-4 py-2 rounded-lg hover:bg-gray-200 hover:text-primary-dark transition duration-300 font-semibold">Login</a>
      </nav>
    </div>
  </header>

  <!-- ===== Berita Detail ===== -->
  <section class="news-detail">
    <div class="container">
      <h1 class="news-title">Judul Berita Lorem Ipsum Lorem dolor sit amet, consectetur</h1>
      <p class="news-date"><i class="bi bi-calendar3"></i> 25 Januari 2025</p>

      <img src="img/berita-sample.jpg" alt="Gambar Berita" class="news-image">

      <div class="news-content">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean convallis ligula eget dolor. 
          Aenean molestie, neque quis luctus rhoncus, nisi nisl consequat neque, at posuere erat felis vitae nisl. 
          Sed ut nisi at sapien euismod vehicula. Curabitur facilisis lorem ac pulvinar gravida.
        </p>
        <p>
          Vivamus feugiat ante in arcu faucibus, vitae facilisis massa accumsan. Suspendisse potenti. 
          Aliquam erat volutpat. Integer tempor leo nec tincidunt lacinia. Phasellus commodo justo ut libero 
          sagittis vulputate. Donec vel tellus eget nisi maximus hendrerit. Cras bibendum nisi ac enim posuere, 
          ac vehicula velit aliquet.
        </p>
      </div>

      <div class="news-gallery">
        <div class="gallery-item">
          <img src="img/berita1.jpg" alt="Kegiatan 1">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="gallery-item">
          <img src="img/berita2.jpg" alt="Kegiatan 2">
          <p>Integer in augue ut sapien imperdiet accumsan nec in leo.</p>
        </div>
      </div>

      <div class="news-content">
        <p>
          Mauris blandit mollis dolor, vel bibendum erat suscipit ut. 
          Fusce ut dui tempor, condimentum nisl et, eleifend metus. 
          Etiam nec erat a elit cursus iaculis nec non nunc.
        </p>
      </div>

      <div class="share-section">
        <h3>Bagikan Artikel:</h3>
        <div class="share-buttons">
          <a href="#" title="Bagikan ke WhatsApp"><i class="bi bi-whatsapp"></i></a>
          <a href="#" title="Bagikan ke Facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" title="Bagikan ke Twitter"><i class="bi bi-twitter-x"></i></a>
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

  <script src="js/berita-detail.js"></script>
</body>
</html>
