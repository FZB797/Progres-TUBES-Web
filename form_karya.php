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
            <a href="tabel_karya.html">Karya</a>
            <a href="landing_page.html">Keluar</a>
        </nav>
    </aside>

    <!-- ====== WRAPPER UNTUK KONTEN DAN FOOTER ====== -->
    <div class="content-wrapper">
        <div class="main-content">
            <header>
                <h1>Tambah Karya</h1>
                <a href="tabel_karya.php" class="btn-kembali">← Kembali</a>
            </header>

            <form action="#" method="post">
                <div class="input-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
                </div>

                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan email" required>
                </div>

                <div class="input-group">
                    <label for="fokus">Fokus</label>
                    <select id="fokus" name="fokus" required>
                        <option value="">-- Pilih Fokus --</option>
                        <option value="UI/UX">UI/UX</option>
                        <option value="Web Developer">Web Developer</option>
                        <option value="Mobile Developer">Mobile Developer</option>
                    </select>
                </div>

                <div class="input-group">
                    <label for="status">Status</label>
                    <select id="status" name="status" required>
                        <option value="">-- Pilih Status --</option>
                        <option value="Aktif">Aktif</option>
                        <option value="Nonaktif">Nonaktif</option>
                    </select>
                </div>

                <button type="submit" class="btn-submit">Simpan Data</button>
            </form>
        </div>

        <footer>
            &copy; 2024 Inready Workgroup. All rights reserved.
        </footer>
    </div>

</body>
</html>
