<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrasi Akun</title>
</head>
<body>
    <h1>Buat Akun Baru</h1>

    <form action="/register" method="post">
        <?= csrf_field() ?>
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Daftar">
    </form>
    <p>Sudah punya akun? <a href="/login">Login di sini</a></p>
</body>
</html>