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
                    <label for="nama-karya">Nama Karya</label>
                    <input 
                        type="text" 
                        id="nama-karya" 
                        name="nama-karya" 
                        placeholder="Masukkan nama karya..." 
                        required="required"
                        oninvalid="this.setCustomValidity('Kolom tidak boleh kosong')"
                        oninput="this.setCustomValidity('')">
                </div>
              
                <div class="input-group">
                    <label for="kategori">Kategori</label>
                    <select id="kategori" name="kategori" required>
                        <option value="">-- Pilih Kategori --</option>
                        <option value="UI/UX">UI/UX</option>
                        <option value="Web Developer">Web Developer</option>
                        <option value="Mobile Developer">Mobile Developer</option>
                    </select>
                </div>
                
                <div class="input-group">
                    <label for="desk-karya">Deskripsi Karya</label>
                    <input
                        type="text"
                        id="desk-karya"
                        name="desk-karya"
                        placeholder="Masukkan deskripsi karya..."
                        required="required"
                        oninvalid="this.setCustomValidity('Kolom ini tidak boleh kosong')"
                        oninput="setCustomValidity('')">
                </div>

                <div class="input-group">
                     <label for="wisata-image">Gambar Karya</label>
                    <input type="file" id="foto" name="foto">
                </div>

                <div class="add-button">
                <button type="submit" class="btn-submit">Simpan</button>
                <button type="reset" class="btn-submit">Batal</button>
                </div>
            </form>
        </div>

        <footer>
            &copy; 2024 Inready Workgroup. All rights reserved.
        </footer>
    </div>

</body>
</html>
