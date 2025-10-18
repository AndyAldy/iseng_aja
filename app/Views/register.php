<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrasi Akun</title>
    <link rel="stylesheet" href="<?= base_url('css/auth.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/base.css') ?>">
</head>
<body>
    <div class="auth-container">
        <div class="auth-form">
            <h1>Buat Akun Baru</h1>
            <form action="/register" method="post">
                <?= csrf_field() ?>
                <div class="form-group">
                    <input type="text" id="username" name="username" placeholder=" " required>
                    <label for="username">Username</label>
                </div>
                <div class="form-group">
                    <input type="password" id="password" name="password" placeholder=" " required>
                    <label for="password">Password</label>
                </div>
                <button type="submit" class="btn">Daftar</button>
            </form>
            <p>Sudah punya akun? <a href="/login">Login di sini</a></p>
        </div>
    </div>
</body>
</html>