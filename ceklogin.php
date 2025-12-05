<?php
include "config.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$username = isset($_POST['username']) ? trim($_POST['username']) : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

if ($username === '' || $password === '') {
    echo "<script>alert('Username dan password wajib diisi'); window.location='login.php';</script>";
    exit();
}

if (!isset($conn)) {
    $conn = mysqli_connect("localhost", "root", "", "data_inready");
}

$query = "SELECT * FROM akun WHERE username = '". mysqli_real_escape_string($conn, $username) ."' LIMIT 1";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) === 1) {
    $data = mysqli_fetch_assoc($result);

    if ($password === $data['password']) {
        $_SESSION['id_user'] = $data['id_user'];
        $_SESSION['username'] = $data['username'];

        header("Location: tabel_anggota.php");
        exit();
    } else {
        echo "<script>alert('Password salah!'); 
        window.location='login.php';</script>";
        exit();
    }
} else {
    echo "<script>alert('Username tidak terdaftar!'); 
    window.location='login.php';</script>";
    exit();
}
?>
