<?php
include "config.php"; // Koneksi menggunakan $conn

// Pastikan parameter id dikirim
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query hapus
    $query = mysqli_query($conn, "DELETE FROM karya WHERE id_karya = '$id'");

    if ($query) {
        echo "<script>
                alert('Data berhasil dihapus!');
                window.location.href = 'tabel_karya.php';
              </script>";
    } else {
        echo "<script>
                alert('Gagal menghapus data!');
                window.location.href = 'tabel_karya.php';
              </script>";
    }
}
?>