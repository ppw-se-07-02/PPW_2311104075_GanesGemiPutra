<?php
// TAMPILKAN ERROR SAAT NGEBUG
error_reporting(E_ALL);
ini_set('display_errors', 1);

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

// PROSES UPDATE
if (isset($_POST['update'])) {
    $nama      = $_POST['nama_produk'];
    $harga     = $_POST['harga'];
    $stok      = $_POST['stok'];
    $kategori  = $_POST['kategori'];
    $deskripsi = $_POST['deskripsi'];

    // default pakai gambar lama
    $namaFile = $data['gambar'];

    // kalau upload gambar baru
    if (!empty($_FILES['gambar']['name'])) {
        $namaBaru = time() . '_' . basename($_FILES['gambar']['name']);
        $tmp      = $_FILES['gambar']['tmp_name'];

        if (move_uploaded_file($tmp, 'uploads/' . $namaBaru)) {
            // hapus gambar lama (kalau ada)
            if (!empty($namaFile) && file_exists('uploads/' . $namaFile)) {
                @unlink('uploads/' . $namaFile);
            }
            $namaFile = $namaBaru;
        }
    }

    $sql = "UPDATE produk SET
                nama_produk = '$nama',
                harga       = '$harga',
                stok        = '$stok',
                kategori    = '$kategori',
                deskripsi   = '$deskripsi',
                gambar      = '$namaFile'
            WHERE id = $id";

    if (mysqli_query($koneksi, $sql)) {
        header("Location: kelola_produk.php");
        exit;
    } else {
        $error = "Gagal update: " . mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk - Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

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

        /* CARD EDIT PRODUK */
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
        }

        .content-card label {
            font-weight: 600;
            margin-bottom: 6px;
        }

        .content-card .form-control {
            height: 48px;
            border-radius: 10px;
        }

        textarea.form-control {
            height: 120px !important;
        }

        .preview-img {
            height: 90px;
            width: auto;
            border-radius: 10px;
            border: 3px solid #333;
            margin-bottom: 10px;
            object-fit: cover;
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
                    <i class="fas fa-pen-to-square"></i> Edit Produk
                </a>
            </li>
        </ul>
    </div>

    <!-- KONTEN -->
    <div class="flex-grow-1 bg-overlay">
        <div class="content-card">
            <h3>Edit Produk</h3>

            <?php if (!empty($error)): ?>
                <div class="alert alert-danger"><?= $error ?></div>
            <?php endif; ?>

            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" name="nama_produk" id="nama_produk"
                           class="form-control"
                           value="<?= htmlspecialchars($data['nama_produk']); ?>" required>
                </div>

                <div class="mb-3">
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" id="harga"
                           class="form-control"
                           value="<?= $data['harga']; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="stok">Stok</label>
                    <input type="number" name="stok" id="stok"
                           class="form-control"
                           value="<?= $data['stok']; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="kategori">Kategori</label>
                    <input type="text" name="kategori" id="kategori"
                           class="form-control"
                           value="<?= htmlspecialchars($data['kategori']); ?>">
                </div>

                <div class="mb-3">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi"
                              class="form-control"><?= htmlspecialchars($data['deskripsi']); ?></textarea>
                </div>

                <div class="mb-3">
                    <label>Gambar</label><br>
                    <?php if (!empty($data['gambar'])): ?>
                        <img src="uploads/<?= htmlspecialchars($data['gambar']); ?>" class="preview-img" alt="Gambar produk">
                    <?php endif; ?>
                    <input type="file" name="gambar" class="form-control mt-2">
                    <small class="text-muted">Biarkan kosong jika tidak ingin mengganti gambar.</small>
                </div>

                <div class="btn-group-custom">
                    <button type="submit" name="update" class="btn btn-primary px-4">Simpan</button>
                    <a href="kelola_produk.php" class="btn btn-secondary px-4">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="watermark-by">BY : GANES GEMI PUTRA</div>

</body>
</html>
