<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modul 11 - View & Assets</title>
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<body>
  <div class="container">
    <div class="card">
      <span class="badge">Unguided • View & Assets</span>
      <h1>Demo Pengelolaan Asset (CSS, JS, IMG)</h1>
      <p>Gambar diambil dari folder <code>public/assets/img</code>, CSS dari <code>public/assets/css</code>, dan JS dari <code>public/assets/js</code>.</p>

      <h3>Gambar dari assets/img</h3>
      <img src="{{ asset('assets/img/logo_panti.png') }}" alt="Logo Panti">

      <h3>Uji JavaScript</h3>
      <button id="btnHello" type="button">Klik untuk cek JS</button>
      <div id="msg">Belum diklik.</div>

      <hr style="border:0;border-top:1px solid rgba(255,255,255,.12);margin:18px 0;">
      <p><a href="{{ url('/mahasiswa') }}" style="color:#a5b4fc;">Lihat tugas Blade (Loop)</a></p>
      <p><a href="{{ url('/u/controller') }}" style="color:#a5b4fc;">Lihat tugas Controller</a></p>
    </div>
  </div>

  <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>
