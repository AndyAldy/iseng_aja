<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mobil Baru</title>
    <link rel="stylesheet" href="<?= base_url('css/auth.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/base.css') ?>">
</head>
<body>
    <div class="auth-container">
        <div class="auth-form">
            <h1>Form Tambah Mobil</h1>
            <form action="/admin/store" method="post">
                <?= csrf_field() ?>
                <div class="form-group">
                    <label for="nama_mobil">Nama Mobil</label>
                    <input type="text" id="nama_mobil" name="nama_mobil" required>
                </div>
                <div class="form-group">
                    <label for="merk_mobil">Merk Mobil</label>
                    <input type="text" id="merk_mobil" name="merk_mobil" required>
                </div>
                <div class="form-group">
                    <label for="tahun_mobil">Tahun Mobil</label>
                    <input type="number" id="tahun_mobil" name="tahun_mobil" required>
                </div>
                <div class="form-group">
                    <label for="jenis_mobil">Jenis Mobil</label>
                    <select id="jenis_mobil" name="jenis_mobil" required>
                        <option value="SUV">SUV</option>
                        <option value="Sedan">Sedan</option>
                        <option value="MPV">MPV</option>
                        <option value="HatchBack">HatchBack</option>
                        <option value="LCGC">LCGC</option>
                    </select>
                </div>
                <button type="submit" class="btn">Simpan</button>
            </form>
        </div>
    </div>
</body>
</html>