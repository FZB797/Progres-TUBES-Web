<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota | Inready Workgroup</title>
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

    <!-- ====== KONTEN ====== -->
    <div class="content-wrapper">
        <div class="main-content">
            <header>
                <h1>Data Karya Inready Workgroup</h1>
                <a href="form_karya.php" class="btn-tambah">+ Tambah Karya</a>
            </header>

            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Karya</th>
                        <th>Gambar</th>
                        <th>Deskripsi</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Web Anime</td>
                        <td><img class="img-tabel" src="aset/karya1.jpg"></td>
                        <td>Web ini bagian awal</td>
                        <td>Web</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <footer>
            &copy; 2024 Inready Workgroup. All rights reserved.
        </footer>
    </div>

</body>
</html>
