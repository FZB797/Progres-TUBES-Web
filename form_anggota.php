<?php
include "config.php";
include "proses_tambah_anggota.php";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Anggota | Inready Workgroup</title>
    <link rel="icon" type="image/png" href="aset/logo_inr.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="aset/style_tabel.css?v=<?= time(); ?>">
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

            <form action="" method="post">
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
            
        </div>
        <footer>
            &copy; 2024 Inready Workgroup. All rights reserved.
        </footer>
    </div>

</body>
</html>
