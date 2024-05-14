<?php
// Memanggil file koneksi database
require '../dbkoneksi.php';

// Memeriksa apakah parameter id telah diterima dari URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Menghapus data periksa yang terkait dengan dokter yang akan dihapus
    $sqlDeletePeriksa = "DELETE FROM periksa WHERE dokter_id = ?";
    $stmtDeletePeriksa = $dbh->prepare($sqlDeletePeriksa);
    $stmtDeletePeriksa->execute([$id]);

    // Menghapus data dokter berdasarkan id
    $sqlDeleteDokter = "DELETE FROM dokter WHERE id = ?";
    $stmtDeleteDokter = $dbh->prepare($sqlDeleteDokter);
    $stmtDeleteDokter->execute([$id]);

    // Redirect ke halaman index.php setelah proses penghapusan selesai
    header("Location: index.php");
    exit();
} else {
    echo "Parameter ID tidak ditemukan.";
    exit;
}
?>
