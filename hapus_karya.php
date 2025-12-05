<?php
include "harus_login.php";
include "config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

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