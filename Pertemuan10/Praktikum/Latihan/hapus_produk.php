<?php
include 'koneksi.php';

// CEK ID
if (!isset($_GET['id'])) {
    header("Location: kelola_produk.php");
    exit;
}

$id = (int) $_GET['id'];

// AMBIL DATA PRODUK
$q = mysqli_query($koneksi, "SELECT * FROM produk WHERE id = $id");
$data = mysqli_fetch_assoc($q);

if (!$data) {
    die("Produk tidak ditemukan.");
}

// PROSES HAPUS
if (isset($_POST['hapus'])) {
    // Hapus gambar jika ada
    if (!empty($data['gambar']) && file_exists('uploads/' . $data['gambar'])) {
        @unlink('uploads/' . $data['gambar']);
    }

    // Hapus dari database
    $sql = "DELETE FROM produk WHERE id = $id";
    if (mysqli_query($koneksi, $sql)) {
        header("Location: kelola_produk.php");
        exit;
    } else {
        $error = "Gagal menghapus produk: " . mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hapus Produk - Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            background: url('assets/poto-ganes.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .bg-overlay {
            background: rgba(0, 0, 0, 0.55);
            backdrop-filter: blur(5px);
            min-height: 100vh;
        }

        /* SIDEBAR */
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
        .sidebar .nav-link.active {
            background: #00b4ff;
            color: #fff !important;
            font-weight: 700;
        }

        /* CARD HAPUS PRODUK */
        .content-card {
            width: 80%;
            max-width: 950px;
            background: #ffffff;
            margin: 40px auto;
            padding: 35px;
            border-radius: 18px;
            box-shadow: 0px 4px 16px rgba(0,0,0,0.45);
        }

        .content-card h3 {
            font-weight: 700;
            margin-bottom: 25px;
            color: #dc3545;
        }

        .product-info {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 25px;
            border-left: 4px solid #dc3545;
        }

        .product-info h5 {
            color: #333;
            margin-bottom: 15px;
        }

        .product-detail {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .product-detail strong {
            width: 120px;
            color: #666;
        }

        .product-img {
            height: 80px;
            width: auto;
            border-radius: 8px;
            border: 2px solid #ddd;
            margin-left: 10px;
        }

        .alert-danger {
            background: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 25px;
        }

        .btn-group-custom {
            margin-top: 20px;
            display: flex;
            gap: 10px;
        }

        /* WATERMARK */
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
    <!-- SIDEBAR -->
    <div class="sidebar text-white">
        <h4>Admin Panel</h4>
        <ul class="nav flex-column mt-4">
            <li>
                <a href="http://localhost/Latihan/index.php" class="nav-link">
                    <i class="fas fa-home"></i> Beranda
                </a>
            </li>
            <li>
                <a href="kelola_produk.php" class="nav-link">
                    <i class="fas fa-boxes"></i> Kelola Produk
                </a>
            </li>
            <li>
                <a href="#" class="nav-link active">
                    <i class="fas fa-trash"></i> Hapus Produk
                </a>
            </li>
        </ul>
    </div>

    <!-- KONTEN -->
    <div class="flex-grow-1 bg-overlay">
        <div class="content-card">
            <h3><i class="fas fa-exclamation-triangle"></i> Konfirmasi Hapus Produk</h3>

            <div class="alert alert-danger">
                <i class="fas fa-warning"></i> <strong>Perhatian!</strong> Tindakan ini tidak dapat dibatalkan.
                Produk yang dihapus akan hilang secara permanen beserta gambarnya.
            </div>

            <?php if (!empty($error)): ?>
                <div class="alert alert-danger"><?= $error ?></div>
            <?php endif; ?>

            <div class="product-info">
                <h5><i class="fas fa-info-circle"></i> Detail Produk yang Akan Dihapus:</h5>

                <div class="product-detail">
                    <strong>Nama Produk:</strong> <?= htmlspecialchars($data['nama_produk']); ?>
                </div>

                <div class="product-detail">
                    <strong>Harga:</strong> Rp <?= number_format($data['harga'], 0, ',', '.'); ?>
                </div>

                <div class="product-detail">
                    <strong>Stok:</strong> <?= $data['stok']; ?>
                </div>

                <div class="product-detail">
                    <strong>Kategori:</strong> <?= htmlspecialchars($data['kategori']); ?>
                </div>

                <div class="product-detail">
                    <strong>Deskripsi:</strong> <?= htmlspecialchars($data['deskripsi']); ?>
                </div>

                <?php if (!empty($data['gambar'])): ?>
                <div class="product-detail">
                    <strong>Gambar:</strong>
                    <img src="uploads/<?= htmlspecialchars($data['gambar']); ?>" class="product-img" alt="Gambar produk">
                </div>
                <?php endif; ?>
            </div>

            <form method="post">
                <div class="btn-group-custom">
                    <button type="submit" name="hapus" class="btn btn-danger px-4"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                        <i class="fas fa-trash"></i> Ya, Hapus Produk
                    </button>
                    <a href="kelola_produk.php" class="btn btn-secondary px-4">
                        <i class="fas fa-arrow-left"></i> Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="watermark-by">BY : GANES GEMI PUTRA</div>

</body>
</html>
