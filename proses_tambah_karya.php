<?php
$koneksi = mysqli_connect("localhost", "root", "", "data_inready");

if(mysqli_connect_errno()){ 
    echo "Koneksi gagal: " . mysqli_connect_error(); 
}

include "config.php";
$nama_karya = $_POST['nama-karya'];
$kategori   = $_POST['kategori'];
$deskripsi  = $_POST['desk-karya'];

$foto        = $_FILES['foto']['name'];
$tmp_foto    = $_FILES['foto']['tmp_name'];
$ukuran_foto = $_FILES['foto']['size'];
$tipe_foto   = $_FILES['foto']['type'];

$target_dir = "karya/";
$target_file = $target_dir . basename($foto);

if ($ukuran_foto > 1000000) {
    echo "<script>
            alert('Ukuran file melebihi 1 MB!');
            window.location='tabel_karya.php';
          </script>";
    exit;
}

$allowed_types = ['image/jpeg','image/jpg','image/png'];

if (!in_array($tipe_foto, $allowed_types)) {
    echo "<script>
            alert('Tipe file tidak didukung! Gunakan JPG atau PNG.');
            window.location='tabel_karya.php';
          </script>";
    exit;
}

move_uploaded_file($tmp_foto, $target_file);

$query = "INSERT INTO karya (nama_karya, kategori, deskripsi, foto)
          VALUES ('$nama_karya', '$kategori', '$deskripsi', '$foto')";

if (mysqli_query($conn, $query)) {
    echo "<script>
            alert('Karya berhasil ditambahkan!');
            window.location='tabel_karya.php';
          </script>";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
