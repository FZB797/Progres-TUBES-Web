<?php
$koneksi = mysqli_connect("localhost", "root", "", "data_inready");

if(mysqli_connect_errno()){ 
    echo "Koneksi gagal: " . mysqli_connect_error(); 
}

include "config.php";
$edit_mode = false;
$nama_karya = "";
$kategori = "";
$deskripsi = "";
$foto = "";

if (isset($_GET['id'])) {
    $edit_mode = true;
    $id = $_GET['id'];

    $sql = mysqli_query($conn, "SELECT * FROM karya WHERE id_karya = '$id'");
    $data = mysqli_fetch_assoc($sql);

    $nama_karya = $data['nama_karya'];
    $kategori   = $data['kategori'];
    $deskripsi  = $data['deskripsi'];
    $foto       = $data['foto'];

}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_karya = $_POST['nama-karya'];
    $kategori   = $_POST['kategori'];
    $deskripsi  = $_POST['desk-karya'];
    $foto_baru = $_FILES['foto']['name'];
    $ukuran_foto = $_FILES['foto']['size'];
    $tipe_foto   = $_FILES['foto']['type'];

    // Jika tidak upload foto baru → skip validasi foto
    $validasi_foto = ($foto_baru != "");
    
    if ($foto_baru != "") {
        $target_dir = "karya/";
        $target_file = $target_dir . basename($foto_baru);
        move_uploaded_file($_FILES['foto']['tmp_name'], $target_file);
    }
    
    if ($validasi_foto && $ukuran_foto > 1000000) {
        echo "<script>
                alert('Ukuran file melebihi 1 MB!');
                window.location.href = 'form_karya.php';
                history.back();
            </script>";
        return;
    }   
    
    $allowed_types = ['image/jpeg','image/jpg','image/png'];
    if ($validasi_foto && !in_array($tipe_foto, $allowed_types)) {
        echo "<script>
                alert('Tipe file tidak didukung! Gunakan JPG atau PNG.');
                window.location.href = 'form_karya.php';
                history.back();
            </script>";
        return;
    }


    // EDIT DATA
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        if ($foto_baru != "") {
            $query = mysqli_query($conn, 
                "UPDATE karya SET 
                    nama_karya='$nama_karya',
                    kategori='$kategori',
                    deskripsi='$deskripsi',
                    foto='$foto_baru'
                WHERE id_karya='$id'");
        } else {
            $query = mysqli_query($conn, 
                "UPDATE karya SET 
                    nama_karya='$nama_karya',
                    kategori='$kategori',
                    deskripsi='$deskripsi'
                WHERE id_karya='$id'");
        }

        echo "<script>alert('Karya berhasil diperbarui'); 
            window.location='tabel_karya.php';</script>";

    // TAMBAH BARU
    } else {
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
    }
}
