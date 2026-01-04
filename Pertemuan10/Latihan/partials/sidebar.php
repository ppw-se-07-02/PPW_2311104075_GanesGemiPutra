<?php
// partials/sidebar.php
?>
<aside class="sidebar">
  <div class="brand">📦 Toko Bootstrap</div>

  <nav class="d-grid gap-1">
    <a class="<?= current_page('index.php') ?>" href="index.php">🏠 Dashboard</a>
    <a class="<?= current_page('kelola_produk.php') ?>" href="kelola_produk.php">🧾 Kelola Produk</a>
  </nav>

  <div class="mt-4 small text-secondary">
    <div>PHP + MySQL (CRUD)</div>
    <div class="mt-1">Modul 10.7 – Unguided</div>
  </div>
</aside>
