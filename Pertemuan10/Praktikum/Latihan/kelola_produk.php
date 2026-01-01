<?php
include 'koneksi.php';

// pencarian
$cari = isset($_GET['cari']) ? trim($_GET['cari']) : '';
$sql = "SELECT * FROM produk";
if ($cari !== '') {
    $sql .= " WHERE nama_produk LIKE '%$cari%' OR kategori LIKE '%$cari%'";
}
$sql .= " ORDER BY id DESC";
$hasil = mysqli_query($koneksi, $sql);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kelola Produk - Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            background: url('assets/poto-ganes.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        /* Layer gelap blur */
        .bg-overlay {
            background: rgba(0, 0, 0, 0.55);
            backdrop-filter: blur(5px);
            min-height: 100vh;
        }

        /* Card konten */
        .content-card {
            background: #fff;
            margin: 35px auto;
            width: 90%;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0px 4px 16px rgba(0,0,0,0.45);
        }

        /* Sidebar Styling Esport */
        .sidebar {
            background: linear-gradient(180deg, #0f0f0f 0%, #1b1b1b 100%);
            min-height: 100vh;
            width: 250px;
            padding: 25px;
            box-shadow: 4px 0 10px rgba(0,0,0,0.4);
        }

        .sidebar h4 {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .sidebar .nav-link {
            color: #bfbfbf;
            font-size: 16px;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 5px;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: 0.25s ease;
        }

        .sidebar .nav-link i {
            font-size: 18px;
        }

        .sidebar .nav-link:hover {
            background: rgba(0, 180, 255, 0.2);
            color: #00b4ff;
            transform: translateX(6px);
        }

        /* Menu aktif */
        .sidebar .nav-link.active {
            background: #00b4ff;
            color: #fff !important;
            font-weight: 700;
        }

        .table-img {
            height: 65px;
            width: 100px;
            object-fit: cover;
            border-radius: 8px;
            border: 2px solid #000;
        }

        /* WATERMARK TENGAH BAWAH */
        .watermark-by {
            position: fixed;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            padding: 6px 20px;
            font-size: 14px;
            font-weight: 600;
            background: rgba(0, 0, 0, 0.75);
            color: #ffffff;
            border-radius: 999px;
            border: 1px solid rgba(255, 255, 255, 0.5);
            pointer-events: none;
            z-index: 9999;
        }
    </style>
</head>
<body>

<div class="d-flex">
    <div class="sidebar text-white">
        <h4>Admin Panel</h4>
        <ul class="nav flex-column mt-4">
            <li><a href="http://localhost/Latihan/index.php" class="nav-link"><i class="fas fa-home"></i> Beranda</a></li>
            <li><a href="kelola_produk.php" class="nav-link active"><i class="fas fa-boxes"></i> Kelola Produk</a></li>
        </ul>
    </div>

    <div class="flex-grow-1 bg-overlay">
        <div class="content-card">
            <h3 class="mb-3">Kelola Produk</h3>

            <!-- Form Cari -->
            <form method="get" class="mb-3 d-flex gap-2">
                <input type="text" name="cari" class="form-control" placeholder="Cari nama / kategori" value="<?= htmlspecialchars($cari) ?>">
                <button class="btn btn-primary">Cari</button>
                <a href="kelola_produk.php" class="btn btn-secondary">Reset</a>
            </form>

            <!-- Tabel Produk -->
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark">
                <tr>
                    <th>No</th><th>Nama Produk</th><th>Harga</th><th>Stok</th><th>Kategori</th><th>Deskripsi</th><th>Gambar</th><th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php if(mysqli_num_rows($hasil)==0): ?>
                    <tr><td colspan="8" class="text-center">Belum ada produk</td></tr>
                <?php else: $no=1; while($row=mysqli_fetch_assoc($hasil)): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row['nama_produk'] ?></td>
                        <td>Rp <?= number_format($row['harga'],0,',','.') ?></td>
                        <td><?= $row['stok'] ?></td>
                        <td><?= $row['kategori'] ?></td>
                        <td><?= $row['deskripsi'] ?></td>
                        <td><img src="uploads/<?= $row['gambar'] ?>" class="table-img"></td>
                        <td>
                            <a href="edit_produk.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="hapus_produk.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; endif; ?>
                </tbody>
            </table>

            <a href="tambah_produk.php" class="btn btn-primary mt-3">+ Tambah Produk</a>
        </div>
    </div>
</div>

<div class="watermark-by">BY : GANES GEMI PUTRA</div>

</body>
</html>
