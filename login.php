<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Inready Workgroup</title>
    <link rel="icon" type="image/png" href="aset/logo_inr.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="aset/style_login.css">
</head>
<body>

    <div class="login-container">
        <div class="login-logo">
            <img src="aset/logo_inr.png" alt="Logo Inready Workgroup">
            <h2>Inready Workgroup</h2>
        </div>

        <form action="tabel_anggota.php" method="get">
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email anda" required>
            </div>

            <div class="input-group">
                <label for="password">Kata Sandi</label>
                <input type="password" id="password" name="password" placeholder="Masukkan kata sandi" required>
            </div>

            <button type="submit" class="btn-login">Masuk</button>
        </form>
    </div>

</body>
</html>
