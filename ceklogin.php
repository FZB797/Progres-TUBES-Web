<?php
session_start();
include "config.php";
$koneksi = mysqli_connect("localhost", "root", "", "data_inready");
if(mysqli_connect_errno()){ 
        echo "Koneksi gagal: " . mysqli_connect_error(); 
}

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM akun WHERE username = '$username' LIMIT 1";
$result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) === 1) {
    $data = mysqli_fetch_assoc($result);

    if ($password === $data['password']) {

        $_SESSION['id_user'] = $data['id_user'];
        $_SESSION['username'] = $data['username'];

        header("Location: tabel_anggota.php");
        exit;

    } else {
        echo "<script>
                alert('Password salah!');
                window.location.href = 'login.php';
              </script>";
    }
} else {
    echo "<script>
            alert('Username tidak terdaftar!');
            window.location.href = 'login.php';
          </script>";
}
?>
