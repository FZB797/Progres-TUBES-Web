<?php
include "config.php"; // Koneksi menggunakan $conn

// Pastikan parameter id dikirim
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query hapus
    $query = mysqli_query($conn, "DELETE FROM anggota WHERE id_anggota = '$id'");

    if ($query) {
        echo "<script>
                alert('Data berhasil dihapus!');
                window.location.href = 'tabel_anggota.php';
              </script>";
    } else {
        echo "<script>
                alert('Gagal menghapus data!');
                window.location.href = 'tabel_anggota.php';
              </script>";
    }
}
?>