<?php
require_once __DIR__ . "/config/koneksi.php";
require_once __DIR__ . "/config/helpers.php";

$title = "Tambah Produk";
$heading = "Tambah Produk";
$subheading = "Create (INSERT) data produk ke database";

$errors = [];
$nama = $kategori = "";
$harga = $stok = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama_produk"] ?? "");
    $kategori = trim($_POST["kategori"] ?? "");
    $harga = trim($_POST["harga"] ?? "");
    $stok = trim($_POST["stok"] ?? "");

    if ($nama === "") $errors[] = "Nama produk wajib diisi.";
    if ($kategori === "") $errors[] = "Kategori wajib diisi.";
    if ($harga === "" || !is_numeric($harga) || (float)$harga < 0) $errors[] = "Harga harus angka >= 0.";
    if ($stok === "" || !ctype_digit($stok) || (int)$stok < 0) $errors[] = "Stok harus bilangan bulat >= 0.";

    if (!$errors) {
        $stmt = mysqli_prepare($conn, "INSERT INTO produk (nama_produk, kategori, harga, stok) VALUES (?, ?, ?, ?)");
        $h = (float)$harga;
        $s = (int)$stok;
        mysqli_stmt_bind_param($stmt, "ssdi", $nama, $kategori, $h, $s);

        if (mysqli_stmt_execute($stmt)) {
            mysqli_close($conn);
            header("Location: kelola_produk.php?msg=" . urlencode("Produk berhasil ditambahkan."));
            exit;
        } else {
            $errors[] = "Gagal menambah produk: " . mysqli_error($conn);
        }
    }
}

require_once __DIR__ . "/partials/header.php";
require_once __DIR__ . "/partials/sidebar.php";
?>
<main class="content">
  <?php require __DIR__ . "/partials/topbar.php"; ?>

  <?php if ($errors): ?>
    <div class="alert alert-danger">
      <ul class="mb-0">
        <?php foreach ($errors as $e): ?><li><?= e($e) ?></li><?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>

  <div class="card p-4">
    <form method="POST" action="">
      <div class="mb-3">
        <label class="form-label">Nama Produk</label>
        <input class="form-control" name="nama_produk" value="<?= e($nama) ?>" required maxlength="100" placeholder="Contoh: Kabel HDMI">
      </div>

      <div class="mb-3">
        <label class="form-label">Kategori</label>
        <input class="form-control" name="kategori" value="<?= e($kategori) ?>" required maxlength="50" placeholder="Contoh: Aksesoris">
      </div>

      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label">Harga</label>
          <input class="form-control" name="harga" value="<?= e($harga) ?>" required placeholder="Contoh: 150000">
        </div>
        <div class="col-md-6">
          <label class="form-label">Stok</label>
          <input class="form-control" name="stok" value="<?= e($stok) ?>" required placeholder="Contoh: 10">
        </div>
      </div>

      <div class="d-flex gap-2 mt-4">
        <button class="btn btn-primary" type="submit">Simpan</button>
        <a class="btn btn-outline-secondary" href="kelola_produk.php">Kembali</a>
      </div>
    </form>
  </div>
</main>
<?php mysqli_close($conn); require_once __DIR__ . "/partials/footer.php"; ?>
