<?php
$conn = mysqli_connect("localhost", "root", "", "data_inready");

if (!$conn) {
    echo "0";
    exit;
}

$query = mysqli_query($conn, "SELECT COUNT(*) AS total FROM anggota");
$hasil = mysqli_fetch_assoc($query);

echo $hasil['total'];
