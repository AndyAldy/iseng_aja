<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Mobil</title>
    <link rel="stylesheet" href="<?= base_url('css/auth.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/base.css') ?>">
</head>
<body>
    <div class="auth-container">
        <div class="auth-form">
            <h1>Form Edit Mobil</h1>
            <form action="/admin/update/<?= $mobil['id_mobil']; ?>" method="post">
                <?= csrf_field() ?>
                <div class="form-group">
                    <label for="nama_mobil">Nama Mobil</label>
                    <input type="text" id="nama_mobil" name="nama_mobil" value="<?= esc($mobil['nama_mobil']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="merk_mobil">Merk Mobil</label>
                    <input type="text" id="merk_mobil" name="merk_mobil" value="<?= esc($mobil['merk_mobil']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="tahun_mobil">Tahun Mobil</label>
                    <input type="number" id="tahun_mobil" name="tahun_mobil" value="<?= esc($mobil['tahun_mobil']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="jenis_mobil">Jenis Mobil</label>
                    <select id="jenis_mobil" name="jenis_mobil" required>
                        <option value="SUV" <?= ($mobil['jenis_mobil'] == 'SUV') ? 'selected' : ''; ?>>SUV</option>
                        <option value="Sedan" <?= ($mobil['jenis_mobil'] == 'Sedan') ? 'selected' : ''; ?>>Sedan</option>
                        <option value="MPV" <?= ($mobil['jenis_mobil'] == 'MPV') ? 'selected' : ''; ?>>MPV</option>
                        <option value="HatchBack" <?= ($mobil['jenis_mobil'] == 'HatchBack') ? 'selected' : ''; ?>>HatchBack</option>
                        <option value="LCGC" <?= ($mobil['jenis_mobil'] == 'LCGC') ? 'selected' : ''; ?>>LCGC</option>
                    </select>
                </div>
                <button type="submit" class="btn">Update</button>
            </form>
        </div>
    </div>
</body>
</html>