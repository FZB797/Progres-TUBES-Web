<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karya | Inready Workgroup</title>
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
                    <?php
                    include "config.php";

                    $no = 1;
                    $query = mysqli_query($conn, "SELECT * FROM karya ORDER BY id_karya DESC");

                    while ($row = mysqli_fetch_assoc($query)) {
                        echo "
                        <tr>
                            <td>$no</td>
                            <td>{$row['nama_karya']}</td>
                            <td><img src='karya/{$row['foto']}' style='width: 100px; border-radius: 8px; object-fit: cover;'  ></td>
                            <td>{$row['deskripsi']}</td>
                            <td>{$row['kategori']}</td>
                            <td>
                                <a href='form_karya.php?id={$row['id_karya']}' class='btn-edit'>&#9998</a>
                                <a href='hapus_karya.php?id={$row['id_karya']}' class='btn-hapus' onclick='return confirm(\"Yakin ingin menghapus?\")'>&#128465;</a>
                            </td>
                        </tr>
                        ";
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <footer>
            &copy; 2024 Inready Workgroup. All rights reserved.
        </footer>
    </div>

</body>
</html>
