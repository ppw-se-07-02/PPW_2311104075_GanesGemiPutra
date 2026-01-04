<?php
require_once __DIR__ . "/config/koneksi.php";
require_once __DIR__ . "/config/helpers.php";

$id = isset($_GET["id"]) ? (int)$_GET["id"] : 0;
if ($id <= 0) {
    mysqli_close($conn);
    header("Location: kelola_produk.php?msg=" . urlencode("ID produk tidak valid."));
    exit;
}

$stmt = mysqli_prepare($conn, "SELECT * FROM produk WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);
$data = mysqli_fetch_assoc($res);

if (!$data) {
    mysqli_close($conn);
    header("Location: kelola_produk.php?msg=" . urlencode("Data produk tidak ditemukan."));
    exit;
}

$title = "Edit Produk";
$heading = "Edit Produk";
$subheading = "Update (EDIT) data produk";

$errors = [];
$nama = $data["nama_produk"];
$kategori = $data["kategori"];
$harga = $data["harga"];
$stok = $data["stok"];

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
        $stmt2 = mysqli_prepare($conn, "UPDATE produk SET nama_produk=?, kategori=?, harga=?, stok=? WHERE id=?");
        $h = (float)$harga;
        $s = (int)$stok;
        mysqli_stmt_bind_param($stmt2, "ssdii", $nama, $kategori, $h, $s, $id);

        if (mysqli_stmt_execute($stmt2)) {
            mysqli_close($conn);
            header("Location: kelola_produk.php?msg=" . urlencode("Produk berhasil diupdate."));
            exit;
        } else {
            $errors[] = "Gagal update produk: " . mysqli_error($conn);
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
        <input class="form-control" name="nama_produk" value="<?= e($nama) ?>" required maxlength="100">
      </div>

      <div class="mb-3">
        <label class="form-label">Kategori</label>
        <input class="form-control" name="kategori" value="<?= e($kategori) ?>" required maxlength="50">
      </div>

      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label">Harga</label>
          <input class="form-control" name="harga" value="<?= e($harga) ?>" required>
        </div>
        <div class="col-md-6">
          <label class="form-label">Stok</label>
          <input class="form-control" name="stok" value="<?= e($stok) ?>" required>
        </div>
      </div>

      <div class="d-flex gap-2 mt-4">
        <button class="btn btn-primary" type="submit">Update</button>
        <a class="btn btn-outline-secondary" href="kelola_produk.php">Kembali</a>
      </div>
    </form>
  </div>
</main>
<?php mysqli_close($conn); require_once __DIR__ . "/partials/footer.php"; ?>
