<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama      = $_POST['nama_produk'];
    $harga     = $_POST['harga'];
    $stok      = $_POST['stok'];
    $kategori  = $_POST['kategori'];
    $deskripsi = $_POST['deskripsi'];

    $namaFile = "";
    if (!empty($_FILES['gambar']['name'])) {
        $namaFile = time() . '_' . basename($_FILES['gambar']['name']);
        move_uploaded_file($_FILES['gambar']['tmp_name'], 'uploads/' . $namaFile);
    }

    $sql = "INSERT INTO produk (nama_produk, harga, stok, kategori, deskripsi, gambar)
            VALUES ('$nama', '$harga', '$stok', '$kategori', '$deskripsi', '$namaFile')";

    if (mysqli_query($koneksi, $sql)) {
        header("Location: kelola_produk.php");
        exit;
    } else {
        $error = "Gagal menyimpan: " . mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk - Admin Panel</title>
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
            <li><a href="kelola_produk.php" class="nav-link"><i class="fas fa-boxes"></i> Kelola Produk</a></li>
            <li><a href="tambah_produk.php" class="nav-link active"><i class="fas fa-plus"></i> Tambah Produk</a></li>
        </ul>
    </div>

    <div class="flex-grow-1 bg-overlay">
        <div class="content-card">
            <h3 class="mb-4">Tambah Produk</h3>

            <?php if (!empty($error)): ?>
                <div class="alert alert-danger"><?= $error ?></div>
            <?php endif; ?>

            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="number" name="harga" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Stok</label>
                    <input type="number" name="stok" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Kategori</label>
                    <input type="text" name="kategori" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Gambar</label>
                    <input type="file" name="gambar" class="form-control">
                </div>
                <div class="d-flex gap-2">
                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                    <a href="kelola_produk.php" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="watermark-by">BY : GANES GEMI PUTRA</div>

</body>
</html>
