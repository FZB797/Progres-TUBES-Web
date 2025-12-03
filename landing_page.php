<?php
// Tidak ada proses PHP khusus, tetapi file ini sekarang adalah file PHP
?>

<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inready Workgroup</title>
        <link rel="icon" type="image/png" href="aset/logo_inr.png">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="aset/style_LP.css">
    </head>
    <body>

        <!-- ====== HEADER / NAVBAR ====== -->
        <header class="navbar">
            <div class="logo">
                <img src="aset/logo_inr.png" alt="Logo Inready Workgroup">
                <h3>Inready Workgroup</h3>
            </div>
            <ul class="nav-list">
                <li><a class="nav-item" href="#about">Tentang Kami</a></li>
                <li><a class="nav-item" href="#class">Kelas</a></li>
                <li><a class="nav-item" href="#work">Karya</a></li>
                <li><a class="nav-item" href="#media">Sosmed</a></li>
            </ul>
            <a href="login.php" class="login">Login</a>
        </header>

        <!-- ====== TENTANG KAMI ====== -->
        <section id="about">
            <h2>Tentang Kami</h2>
            <p>
                <b>Inready Workgroup</b> merupakan organisasi 
                yang menyediakan platform pembelajaran bagi mahasiswa dan generasi muda 
                untuk mengasah kemampuan di bidang <b>teknologi</b> dan 
                <b>desain digital</b>. Melalui berbagai program, Inready Workgroup 
                membantu anggotanya belajar, berkolaborasi, dan mengembangkan keterampilan 
                praktis di bidang <b>UI/UX Design</b>, <b>Web Development</b>, dan 
                <b>Mobile Development</b>. Kami berkomitmen menciptakan lingkungan belajar 
                yang interaktif dan kreatif, agar anggota tidak hanya memperoleh teori 
                tetapi juga pengalaman langsung dalam proyek nyata.
            </p>
        </section>

        <!-- ====== KELAS ====== -->
        <section id="class">
            <h2>Kelas</h2>
            <div class="class-list">
                <div class="class-item">
                    <img src="aset/web.png" alt="Web Development">
                    <h3>Web Development</h3>
                    <p>Mempelajari cara membangun situs web interaktif, responsif, dan profesional.</p>
                </div>

                <div class="class-item">
                    <img src="aset/mobile.png" alt="Mobile Development">
                    <h3>Mobile Development</h3>
                    <p>Membuat aplikasi Android dan iOS yang menarik dan mudah digunakan.</p>
                </div>

                <div class="class-item">
                    <img src="aset/desain.png" alt="Design UI/UX">
                    <h3>Design UI/UX</h3>
                    <p>Fokus pada tampilan dan pengalaman pengguna yang nyaman dan menarik.</p>
                </div>
            </div>
        </section>

        <!-- ====== KARYA ====== -->
        <section id="work">
            <h2>Karya INR</h2>
            <div class="class-list">
                <div class="work-item"><img src="aset/karya1.jpg" alt="Karya 1"></div>
                <div class="work-item"><img src="aset/karya2.jpg" alt="Karya 2"></div>
                <div class="work-item"><img src="aset/karya3.jpg" alt="Karya 3"></div>
            </div>
        </section>

        <!-- ====== JUMLAH ANGGOTA SAAT INI ====== -->
        <section id="members">
            <div class="container">
                <h2>Jumlah Anggota Saat Ini</h2>
                <div class="member-count">
                    <h3>150+</h3>
                    <p>Anggota Terdaftar</p>
                </div>
            </div>
        </section>

        <!-- ====== MEDIA SOSIAL ====== -->
        <section id="media">
            <div class="container">
                <h2>Sosial Media Kami</h2>
                <div class="social-icons">
                    <a href="https://www.instagram.com/inready.workgroup/" target="_blank">
                        <img src="aset/instagram.jpg" alt="Instagram">
                    </a>

                    <a href="https://www.tiktok.com/@inready.workgroup" target="_blank">
                        <img src="aset/tiktok.jpg" alt="Tiktok">
                    </a>
                </div>
            </div>
        </section>

        <!-- ====== FOOTER ====== -->
        <footer>
            &copy; 2024 Inready Workgroup. All rights reserved.
        </footer>

    </body>
</html>
