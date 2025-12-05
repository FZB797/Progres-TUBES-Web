<?php
include "harus_login.php";

$koneksi = mysqli_connect("localhost", "root", "", "data_inready");

if(mysqli_connect_errno()){ 
    echo "Koneksi gagal: " . mysqli_connect_error(); 
}

$edit_mode = false;
$nama = "";
$email = "";
$fokus = "";
$status = "";

// Jika ada parameter id → Mode Edit
if (isset($_GET['id'])) {
    $edit_mode = true;
    $id = $_GET['id'];

    $sql = mysqli_query($conn, "SELECT * FROM anggota WHERE id_anggota = '$id'");
    $data = mysqli_fetch_assoc($sql);

    // Isi data ke variabel
    $nama   = $data['nama'];
    $email  = $data['email'];
    $fokus  = $data['fokus'];
    $status = $data['status'];
}


 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama   = $_POST['nama'];
    $email  = $_POST['email'];
    $fokus  = $_POST['fokus'];
    $status = $_POST['status'];

    // Proses Edit
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $query = mysqli_query($conn,
            "UPDATE anggota SET 
                nama='$nama', 
                email='$email', 
                fokus='$fokus',
                status='$status'
            WHERE id_anggota='$id'"
        );
        echo "<script>alert('Data berhasil diperbarui'); 
            window.location='tabel_anggota.php';</script>";

    // Proses Tambah Baru
    } else {
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
      mysqli_close($conn);
    }
}
?>