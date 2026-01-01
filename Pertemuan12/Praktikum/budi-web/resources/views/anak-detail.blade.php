<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail Anak - Yayasan Budi Rahayu Al Barokah</title>
    <meta name="description" content="Detail profil anak asuh Yayasan Budi Rahayu Al Barokah. Pelajari lebih lanjut tentang anak yang membutuhkan dukungan dan bantuan Anda." />
    <meta name="keywords" content="detail anak asuh, profil anak panti, bantuan anak yatim, donasi anak, Budi Rahayu Al Barokah" />
    <meta name="author" content="Yayasan Budi Rahayu Al Barokah" />
    <meta name="robots" content="index, follow" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://yayasan-budi-rahayu.vercel.app/anak-detail.html" />
    <meta property="og:title" content="Detail Anak - Yayasan Budi Rahayu Al Barokah" />
    <meta property="og:description" content="Detail profil anak asuh Yayasan Budi Rahayu Al Barokah. Pelajari lebih lanjut tentang anak yang membutuhkan dukungan." />
    <meta property="og:image" content="https://yayasan-budi-rahayu.vercel.app/img/logo_panti.png" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://yayasan-budi-rahayu.vercel.app/anak-detail.html" />
    <meta property="twitter:title" content="Detail Anak - Yayasan Budi Rahayu Al Barokah" />
    <meta property="twitter:description" content="Detail profil anak asuh Yayasan Budi Rahayu Al Barokah. Pelajari lebih lanjut tentang anak yang membutuhkan dukungan." />
    <meta property="twitter:image" content="https://yayasan-budi-rahayu.vercel.app/img/logo_panti.png" />

    <!-- CSS utama -->
    <link rel="stylesheet" href="css/style-awal.css" />
    <!-- CSS halaman anak -->
    <link rel="stylesheet" href="css/style-anak.css" />
    <link rel="stylesheet" href="css/Hamburger/Hamburger.css">
    <link rel="stylesheet" href="css/Hamburger/responsivZ.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
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

    <!-- ===== DETAIL CONTENT ===== -->
    <main class="container anak-detail-wrap">
      <a href="anak.html" class="back-link">← Kembali ke daftar</a>

      <article id="anakDetail" class="anak-detail-card" aria-live="polite">
        <!-- konten detail diisi via JS anak.js -->
      </article>

      <section class="detail-cta">
        <a class="btn-donasi" href="donasi.html">Donasi untuk Anak Ini</a>
      </section>
    </main>

    <!-- ===== FOOTER ===== -->
    <footer class="footer">
      <div class="container footer-content">
        <div class="footer-col logo-col">
          <img
            src="img/logo_panti.png"
            alt="Logo Yayasan"
            class="footer-logo"
          />
          <p class="footer-title">
            Yayasan Yatim Piatu<br />Budi Rahayu Al Barokah
          </p>
        </div>

        <div class="footer-col menu-col">
          <a href="tentang-kami.html">Tentang</a>
          <a href="donasi.html">Donasi</a>
          <a href="berita.html">Berita</a>
          <a href="kontak-kami.html">Kontak Kami</a>
        </div>

        <div class="footer-col address-col">
          <p>
            Gg. Teratai, Kober,<br />
            Kec. Purwokerto Barat,<br />
            Kabupaten Banyumas,<br />
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
      // Inisialisasi detail anak berdasarkan id di URL
      AnakPage.initDetail({ containerId: "anakDetail" });
    </script>
  </body>
</html>
