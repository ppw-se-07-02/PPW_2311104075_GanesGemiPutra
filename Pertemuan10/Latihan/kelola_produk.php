<?php
require_once __DIR__ . "/config/koneksi.php";
require_once __DIR__ . "/config/helpers.php";

$title = "Kelola Produk";
$heading = "Kelola Produk";
$subheading = "CRUD (Create, Read, Update, Delete) + Pencarian";

$keyword = isset($_GET['keyword']) ? trim($_GET['keyword']) : "";
$produk = [];
$total = 0;

if ($keyword !== "") {
    $kw = "%" . $keyword . "%";
    $stmt = mysqli_prepare($conn, "SELECT * FROM produk WHERE nama_produk LIKE ? OR kategori LIKE ? ORDER BY id DESC");
    mysqli_stmt_bind_param($stmt, "ss", $kw, $kw);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);
} else {
    $res = mysqli_query($conn, "SELECT * FROM produk ORDER BY id DESC");
}

if ($res) {
    while ($row = mysqli_fetch_assoc($res)) $produk[] = $row;
    $total = count($produk);
}

$flash = isset($_GET['msg']) ? $_GET['msg'] : "";
require_once __DIR__ . "/partials/header.php";
require_once __DIR__ . "/partials/sidebar.php";
?>
<main class="content">
  <?php require __DIR__ . "/partials/topbar.php"; ?>

  <?php if ($flash): ?>
    <div class="alert alert-success"><?= e($flash) ?></div>
  <?php endif; ?>

  <div class="card p-3 mb-3">
    <div class="d-flex flex-wrap gap-2 justify-content-between align-items-center">
      <form class="d-flex gap-2" method="GET" action="">
        <input class="form-control" style="min-width: 260px" type="text" name="keyword"
               placeholder="Cari nama produk / kategori..." value="<?= e($keyword) ?>">
        <button class="btn btn-outline-primary" type="submit">Cari</button>
        <?php if ($keyword !== ""): ?>
          <a class="btn btn-outline-secondary" href="kelola_produk.php">Reset</a>
        <?php endif; ?>
      </form>

      <a class="btn btn-primary" href="produk_tambah.php">+ Tambah Produk</a>
    </div>
  </div>

  <div class="card p-3">
    <div class="d-flex justify-content-between align-items-center mb-2">
      <div class="text-secondary small">
        Menampilkan <strong><?= $total ?></strong> produk<?= $keyword ? " untuk keyword: <strong>'".e($keyword)."'</strong>" : "" ?>
      </div>
    </div>

    <div class="table-responsive">
      <table class="table align-middle table-hover mb-0">
        <thead>
          <tr>
            <th style="width:70px;">No</th>
            <th>Nama Produk</th>
            <th>Kategori</th>
            <th class="text-end">Harga</th>
            <th class="text-end">Stok</th>
            <th style="width:170px;">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php if (count($produk) === 0): ?>
            <tr><td colspan="6" class="text-center text-secondary py-4">Data produk kosong.</td></tr>
          <?php else: ?>
            <?php $no = 1; foreach ($produk as $p): ?>
              <tr>
                <td><?= $no++ ?></td>
                <td class="fw-semibold"><?= e($p['nama_produk']) ?></td>
                <td><span class="badge text-bg-light"><?= e($p['kategori']) ?></span></td>
                <td class="text-end"><?= e(money_id($p['harga'])) ?></td>
                <td class="text-end"><?= e($p['stok']) ?></td>
                <td>
                  <a class="btn btn-sm btn-outline-primary" href="produk_edit.php?id=<?= (int)$p['id'] ?>">Edit</a>
                  <a class="btn btn-sm btn-outline-danger" href="produk_hapus.php?id=<?= (int)$p['id'] ?>"
                     onclick="return confirm('Yakin ingin menghapus produk ini?')">Hapus</a>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</main>
<?php mysqli_close($conn); require_once __DIR__ . "/partials/footer.php"; ?>
