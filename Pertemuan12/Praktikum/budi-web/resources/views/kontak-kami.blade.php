<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kontak Kami - Yayasan Budi Rahayu</title>
  <meta name="description" content="Hubungi Yayasan Budi Rahayu Al Barokah. Temukan alamat, nomor WhatsApp, dan Instagram kami. Kirim pesan langsung melalui form kontak." />
  <meta name="keywords" content="kontak yayasan, alamat panti, whatsapp panti, instagram panti, Purwokerto, Banyumas" />
  <meta name="author" content="Yayasan Budi Rahayu Al Barokah" />
  <meta name="robots" content="index, follow" />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://yayasan-budi-rahayu.vercel.app/kontak-kami.html" />
  <meta property="og:title" content="Kontak Kami - Yayasan Budi Rahayu" />
  <meta property="og:description" content="Hubungi Yayasan Budi Rahayu Al Barokah. Temukan alamat, nomor WhatsApp, dan Instagram kami." />
  <meta property="og:image" content="https://yayasan-budi-rahayu.vercel.app/img/logo_panti.png" />

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://yayasan-budi-rahayu.vercel.app/kontak-kami.html" />
  <meta property="twitter:title" content="Kontak Kami - Yayasan Budi Rahayu" />
  <meta property="twitter:description" content="Hubungi Yayasan Budi Rahayu Al Barokah. Temukan alamat, nomor WhatsApp, dan Instagram kami." />
  <meta property="twitter:image" content="https://yayasan-budi-rahayu.vercel.app/img/logo_panti.png" />

  <!-- Styles -->
  <link rel="stylesheet" href="css/style-kontak.css" />
  <link rel="stylesheet" href="css/transitions.css" />
  <link rel="stylesheet" href="css/Hamburger/Hamburger.css">
  <link rel="stylesheet" href="css/Hamburger/responsivZ.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Leaflet CSS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

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
        <a href="kontak-kami.html" class="active">Kontak Kami</a>
        <a href="anak.html">Anak</a>
        <a href="login.html" class="bg-white text-primary px-4 py-2 rounded-lg hover:bg-gray-200 hover:text-primary-dark transition duration-300 font-semibold">Login</a>
      </nav>
    </div>
  </header>

  <!-- ===== Kontak Section ===== -->
  <section class="contact-section fade-in-refresh">
    <div class="container">
      <h1>Kontak Kami</h1>
      <p class="contact-address">
        Gg. Teratai, Kober, <br>
        Kec. Purwokerto Barat, Kabupaten Banyumas, <br>
        Jawa Tengah 53132
      </p>

      <div class="contact-info slide-in-left">
        <p><i class="bi bi-instagram"></i> @budirahayual_barokah</p>
        <p><i class="bi bi-whatsapp"></i> +62 815-4128-8412</p>
      </div>

      <button class="btn-contact slide-in-right" id="btnHubungi">Hubungi Kami via WhatsApp</button>

      <!-- ===== Form Kontak ===== -->
      <div class="contact-form-container slide-in-left">
        <h2>Kirim Pesan Langsung</h2>
        <form id="contactForm">
          <div class="form-group">
            <label for="name"><i class="bi bi-person-fill"></i> Nama Lengkap</label>
            <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>
          </div>

          <div class="form-group">
            <label for="email"><i class="bi bi-envelope-fill"></i> Email</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
          </div>

          <div class="form-group">
            <label for="message"><i class="bi bi-chat-dots-fill"></i> Pesan</label>
            <textarea id="message" name="message" rows="5" placeholder="Tulis pesan Anda di sini..." required></textarea>
          </div>

          <button type="submit" class="btn-submit">Kirim Pesan</button>
          <p class="form-status" id="formStatus"></p>
        </form>
      </div>

      <!-- ===== Map (Leaflet) ===== -->
      <div id="map" class="slide-in-right"></div>
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

  <!-- Scripts -->
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
  <script src="js/kontak.js"></script>
</body>
</html>
