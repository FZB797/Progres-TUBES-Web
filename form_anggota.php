<?php
include "config.php";

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
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Anggota | Inready Workgroup</title>
    <link rel="icon" type="image/png" href="aset/logo_inr.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="aset/style_tabel.css">
</head>
<body>

    <!-- ====== SIDEBAR ====== -->
    <aside class="sidebar">
        <img src="aset/logo_inr.png" alt="Logo Inready">
        <nav>
            <a href="tabel_anggota.php">Anggota</a>
            <a href="tabel_karya.php">Karya</a>
            <a href="landing_page.php">Keluar</a>
        </nav>
    </aside>

    <!-- ====== WRAPPER UNTUK KONTEN DAN FOOTER ====== -->
    <div class="content-wrapper">
        <div class="main-content">
            <header>
                <h1>Tambah Anggota Baru</h1>
                <a href="tabel_anggota.php" class="btn-kembali">← Kembali</a>
            </header>

            <form action="proses_tambah_anggota.php" method="post">
                <?php if ($edit_mode) { ?>
                    <input type="hidden" name="id" value="<?= $id ?>">
                <?php } ?>
                <div class="input-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" value="<?= $nama ?>" required>

                </div>

                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan email" value="<?= $email ?>"required>
                </div>

                <div class="input-group">
                    <label for="fokus">Fokus</label>
                    <select id="fokus" name="fokus" required>
                        <option value="">-- Pilih Fokus --</option>
                        <option value="UI/UX" <?= ($fokus=="UI/UX")?"selected":"" ?>>UI/UX</option>
                        <option value="Web Developer" <?= ($fokus=="Web Developer")?"selected":"" ?>>Web Developer</option>
                        <option value="Mobile Developer" <?= ($fokus=="Mobile Developer")?"selected":"" ?>>Mobile Developer</option>
                    </select>
                </div>

                <div class="input-group">
                    <label for="status">Status</label>
                    <select id="status" name="status" required>
                        <option value="">-- Pilih Status --</option>
                        <option value="Aktif" <?= ($status=="Aktif")?"selected":"" ?>>Aktif</option>
                        <option value="Nonaktif" <?= ($status=="Nonaktif")?"selected":"" ?>>Nonaktif</option>
                    </select>
                </div>

                <div class="add-button">
                    <button type="submit" id="submit">Simpan</button>
                </div>

                <div class="add-button">
                    <button type="reset" >Batal</button>
                </div>
            </form>
            <?php
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
                        $query = mysqli_query($conn,
                            "INSERT INTO anggota (nama, email, fokus, status)
                            VALUES ('$nama', '$email', '$fokus', '$status')"
                        );
                        echo "<script>alert('Data berhasil ditambahkan'); 
                            window.location='tabel_anggota.php';</script>";
                    }
                }
            ?>
        </div>
        <footer>
            &copy; 2024 Inready Workgroup. All rights reserved.
        </footer>
    </div>

</body>
</html>
