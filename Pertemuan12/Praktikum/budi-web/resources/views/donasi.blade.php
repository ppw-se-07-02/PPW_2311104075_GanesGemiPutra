<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donasi - Yayasan Budi Rahayu</title>
  <meta name="description" content="Bantu anak-anak panti Yayasan Budi Rahayu dengan donasi Anda. Setiap donasi adalah harapan baru bagi masa depan mereka. Donasi mudah dan aman." />
  <meta name="keywords" content="donasi, bantuan anak panti, sedekah, zakat, yayasan yatim piatu, Budi Rahayu Al Barokah" />
  <meta name="author" content="Yayasan Budi Rahayu Al Barokah" />
  <meta name="robots" content="index, follow" />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://yayasan-budi-rahayu.vercel.app/donasi.html" />
  <meta property="og:title" content="Donasi - Yayasan Budi Rahayu" />
  <meta property="og:description" content="Bantu anak-anak panti Yayasan Budi Rahayu dengan donasi Anda. Setiap donasi adalah harapan baru bagi masa depan mereka." />
  <meta property="og:image" content="https://yayasan-budi-rahayu.vercel.app/img/logo_panti.png" />

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://yayasan-budi-rahayu.vercel.app/donasi.html" />
  <meta property="twitter:title" content="Donasi - Yayasan Budi Rahayu" />
  <meta property="twitter:description" content="Bantu anak-anak panti Yayasan Budi Rahayu dengan donasi Anda. Setiap donasi adalah harapan baru bagi masa depan mereka." />
  <meta property="twitter:image" content="https://yayasan-budi-rahayu.vercel.app/img/logo_panti.png" />

  <link rel="stylesheet" href="css/style-donasi.css">
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
        <a href="donasi.html" class="active">Donasi</a>
        <a href="berita.html">Berita</a>
        <a href="kontak-kami.html">Kontak Kami</a>
        <a href="anak.html">Anak</a>
        <a href="login.html" class="bg-white text-primary px-4 py-2 rounded-lg hover:bg-gray-200 hover:text-primary-dark transition duration-300 font-semibold">Login</a>
      </nav>
    </div>
  </header>

  <!-- HERO -->
  <section class="hero fade-in-refresh">
    <div class="container hero-content">
      <h1>Bersama Kita Bantu Anak Panti</h1>
      <p>Setiap donasi Anda adalah harapan baru bagi masa depan mereka.</p>
      <a href="#form-donasi" class="btn-primary">Mulai Donasi</a>
    </div>
  </section>

  <!-- FORM DONASI -->
  <main class="container">
    <section id="form-donasi" class="donasi-section slide-in-up">
      <h2>Formulir Donasi</h2>
      <p class="intro-text">Isi formulir berikut dengan benar untuk berdonasi. Terima kasih atas kepedulian Anda ❤️</p>

      <form id="donation-form" class="donation-form">
        <fieldset class="donation-options">
          <legend>Pilih Jumlah Donasi</legend>
          <div class="amount-options">
            <label><input type="radio" name="amount" value="25000"> Rp25.000</label>
            <label><input type="radio" name="amount" value="50000"> Rp50.000</label>
            <label><input type="radio" name="amount" value="100000"> Rp100.000</label>
            <label><input type="radio" name="amount" value="other"> Lainnya</label>
          </div>

          <div id="other-amount-wrapper" class="hidden">
            <label for="other-amount">Masukkan Jumlah (Rp)</label>
            <input type="number" id="other-amount" name="other_amount" min="1000" placeholder="Contoh: 150000">
          </div>
        </fieldset>

        <div class="form-row">
          <label for="donor-name">Nama</label>
          <input id="donor-name" name="donor_name" placeholder="Nama Anda (wajib)" required>
        </div>

        <div class="form-row">
          <label for="donor-email">Email</label>
          <input id="donor-email" name="donor_email" type="email" placeholder="email@contoh.com" required>
        </div>

        <div class="form-row">
          <label for="donor-message">Pesan Dukungan</label>
          <textarea id="donor-message" name="message" rows="3" placeholder="Tulis pesan Anda..." required></textarea>
        </div>

        <div class="form-actions">
          <button type="button" id="donate-btn" class="btn-primary">Donasi Sekarang</button>
        </div>

        <p class="note">* Setelah klik tombol, Anda akan diarahkan ke halaman pembayaran.</p>
      </form>
    </section>
  </main>

  <!-- FOOTER -->
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

  <script src="js/donasi.js"></script>
</body>
</html>
