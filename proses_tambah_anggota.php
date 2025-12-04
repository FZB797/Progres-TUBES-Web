<?php
$koneksi = mysqli_connect("localhost", "root", "", "data_inready");

if(mysqli_connect_errno()){ 
    echo "Koneksi gagal: " . mysqli_connect_error(); 
}

include "config.php";
$nama   = $_POST['nama'];
$email  = $_POST['email'];
$fokus  = $_POST['fokus'];
$status = $_POST['status'];

$query = "INSERT INTO anggota (nama, email, fokus, status) 
          VALUES ('$nama', '$email', '$fokus', '$status')";

if (mysqli_query($koneksi, $query)) {
    echo "<script>
            alert('Data berhasil disimpan!');
            window.location.href = 'tabel_anggota.php';
          </script>";
} else {
    echo "<script>
            alert('Gagal menyimpan data!');
            window.location.href = 'tabel_anggota.php';
          </script>";
}

?>
