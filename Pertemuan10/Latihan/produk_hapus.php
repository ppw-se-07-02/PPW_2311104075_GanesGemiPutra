<?php
require_once __DIR__ . "/config/koneksi.php";

$id = isset($_GET["id"]) ? (int)$_GET["id"] : 0;
if ($id > 0) {
    $stmt = mysqli_prepare($conn, "DELETE FROM produk WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
}

mysqli_close($conn);
header("Location: kelola_produk.php?msg=" . urlencode("Produk berhasil dihapus."));
exit;
