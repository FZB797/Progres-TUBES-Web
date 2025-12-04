<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggota | Inready Workgroup</title>
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
                <h1>Data Anggota Inready Workgroup</h1>
                <a href="form_anggota.php" class="btn-tambah">+ Tambah Anggota</a>
            </header>

            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Fokus</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tbody>
                        <?php
                        include "config.php";

                        $no = 1;
                        $query = mysqli_query($conn, "SELECT * FROM anggota ORDER BY id_anggota DESC");

                        while ($row = mysqli_fetch_assoc($query)) {
                            echo "
                            <tr>
                                <td>$no</td>
                                <td>{$row['nama']}</td>
                                <td>{$row['email']}</td>
                                <td>{$row['fokus']}</td>
                                <td>{$row['status']}</td>
                                <td>
                                    <a href='form_anggota.php?id={$row['id_anggota']}' class='btn-edit'>Edit</a>
                                    <a href='hapus_anggota.php?id={$row['id_anggota']}' class='btn-hapus' onclick='return confirm(\"Yakin ingin menghapus?\")'>Hapus</a>
                                </td>
                            </tr>
                            ";
                            $no++;
                        }
                        ?>
                    </tbody>

                </tbody>
            </table>
        </div>

        <footer>
            &copy; 2024 Inready Workgroup. All rights reserved.
        </footer>
    </div>

</body>
</html>
