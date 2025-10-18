<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?= base_url('css/dashboard.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/base.css') ?>">
</head>
<body>

    <header class="header">
        <h1>Car List</h1>
        <a href="/logout" class="btn-logout">Logout</a>
    </header>

    <div class="container">
        <div class="page-title">
            <h1>Selamat Datang, <?= esc(session()->get('username')) ?>!</h1>
        </div>

        <div class="card-container">
            <?php foreach($mobil as $m): ?>
            <div class="car-card">
                <div class="card-image">
                    [Gambar <?= esc($m['jenis_mobil']) ?>]
                </div>
                <div class="card-content">
                    <h2><?= esc($m['nama_mobil']); ?></h2>
                    <ul class="car-details">
                        <li><strong>Merk:</strong> <?= esc($m['merk_mobil']); ?></li>
                        <li><strong>Tahun:</strong> <?= esc($m['tahun_mobil']); ?></li>
                        <li><strong>Jenis:</strong> <?= esc($m['jenis_mobil']); ?></li>
                    </ul>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>
</html>