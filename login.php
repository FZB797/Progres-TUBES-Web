<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Inready Workgroup</title>
    <link rel="icon" type="image/png" href="aset/logo_inr.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="aset/style_login.css?v=<?= time(); ?>">
</head>
<body>

    <div class="login-container">
        <div class="login-logo">
            <img src="aset/logo_inr.png" alt="Logo Inready Workgroup">
            <h2>Inready Workgroup</h2>
        </div>

        <form action="ceklogin.php" method="post">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="username" id="username" name="username" placeholder="Masukkan username anda" required>
            </div>

            <div class="input-group">
                <label for="password">Kata Sandi</label>
                <input type="password" id="password" name="password" placeholder="Masukkan kata sandi" required>
            </div>

            <button type="submit" class="btn-login">Masuk</button>
            <a href="landing_page.php" class="btn-kembali">⟵ Kembali ke Beranda</a>
        </form>
    </div>

</body>
</html>
