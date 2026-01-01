<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Yayasan Budi Rahayu</title>
  <meta name="description" content="Login ke sistem Yayasan Budi Rahayu Al Barokah untuk mengakses fitur admin dan pengelolaan data anak asuh." />
  <meta name="keywords" content="login, admin, sistem yayasan, Budi Rahayu Al Barokah" />
  <meta name="author" content="Yayasan Budi Rahayu Al Barokah" />
  <meta name="robots" content="noindex, nofollow" />

  <link rel="stylesheet" href="css/style-login.css">
  <link rel="stylesheet" href="css/transitions.css">
  <link rel="stylesheet" href="css/Hamburger/Hamburger.css">
  <link rel="stylesheet" href="css/Hamburger/responsivZ.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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
        <a href="anak.html">Anak</a>
        <a href="login.html" class="bg-white text-primary px-4 py-2 rounded-lg hover:bg-gray-200 hover:text-primary-dark transition duration-300 font-semibold">Login</a>
      </nav>
    </div>
  </header>

  <!-- ===== Login Content ===== -->
  <div class="login-container fade-in-refresh">
    <div class="login-section slide-in-left">
      <div class="login-box">
        <div class="login-header">
          <h2>LOGIN</h2>
          <p>Masuk untuk mengakses halaman Budi Rahayu</p>
        </div>

        <form id="loginForm" class="login-form">
          <div class="input-group">
            <label for="username">Username</label>
            <div class="input-wrapper">
              <input type="text" id="username" placeholder="Masukkan username" required />
              <span class="input-icon"><i class="fas fa-user"></i></span>
            </div>
          </div>

          <div class="input-group">
            <label for="password">Password</label>
            <div class="input-wrapper">
              <input type="password" id="password" placeholder="Masukkan password" required />
              <span class="input-icon"><i class="fas fa-lock"></i></span>
              <button type="button" class="toggle-password" aria-label="Toggle password visibility">
                <i class="fas fa-eye"></i>
              </button>
            </div>
          </div>

          <div class="form-options">
            <label class="remember-me">
              <input type="checkbox" id="remember" />
              Ingat saya
            </label>
            <a href="#" class="forgot-password">Lupa password?</a>
          </div>

          <button type="submit" class="btn-login">LOGIN</button>

          <div id="error-msg" class="error-message"></div>
        </form>

        <div class="login-footer">
          <p>Belum punya akun? <a href="#">Daftar di sini</a></p>
        </div>
      </div>
    </div>

    <div class="info-section slide-in-right">
      <div class="info-overlay">
        <h1>START YOUR JOURNEY HERE</h1>
        <p>Bersama Yayasan Budi Rahayu — Menebar kebahagiaan dan keberkahan untuk semua.</p>
      </div>
    </div>
  </div>



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

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="js/transitions.js" defer></script>
  <script src="js/Hamburger/responsive.js" defer></script>
  <script src="js/login.js"></script>

</body>
</html>
