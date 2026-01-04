<?php
$title = "Dashboard";
$heading = "Dashboard";
$subheading = "Pilih menu di sidebar untuk mulai mengelola data.";
require_once __DIR__ . "/partials/header.php";
require_once __DIR__ . "/partials/sidebar.php";
?>
<main class="content">
  <?php require __DIR__ . "/partials/topbar.php"; ?>

  <div class="row g-3">
    <div class="col-md-6">
      <div class="card p-4">
        <div class="d-flex justify-content-between align-items-start">
          <div>
            <div class="text-secondary">Menu utama</div>
            <div class="fs-5 fw-semibold">Kelola Produk</div>
            <div class="small text-secondary mt-1">CRUD + pencarian + data dari database</div>
          </div>
          <span class="badge badge-soft rounded-pill">UNGUIDED</span>
        </div>
        <a class="btn btn-primary mt-3" href="kelola_produk.php">Buka Kelola Produk</a>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card p-4">
        <div class="text-secondary">Petunjuk singkat</div>
        <ol class="mt-2 mb-0">
          <li>Import <code>schema.sql</code> di phpMyAdmin</li>
          <li>Pastikan konfigurasi DB di <code>config/koneksi.php</code></li>
          <li>Jalankan via XAMPP: <code>http://localhost/unguided_kelola_produk</code></li>
        </ol>
      </div>
    </div>
  </div>
</main>
<?php require_once __DIR__ . "/partials/footer.php"; ?>
