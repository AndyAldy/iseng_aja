<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="<?= base_url('css/admin.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/base.css') ?>">
</head>
<body>

    <header class="header">
        <h1>Admin Panel</h1>
        <a href="/logout" class="btn-logout">Logout</a>
    </header>

    <div class="container">
        <div class="page-title">
            <h1>Manajemen Mobil</h1>
            <a href="/admin/create" class="btn-create">Tambah Mobil Baru</a>
        </div>

        <div class="card-container">
            <?php foreach($mobil as $m): ?>
            <div class="car-card">
                <div class="card-image">
                    [Gambar <?= esc($m['merk_mobil'] . ' ' . $m['nama_mobil']) ?>]
                </div>
                <div class="card-content">
                    <h2><?= esc($m['nama_mobil']); ?></h2>
                    <ul class="car-details">
                        <li><strong>Merk:</strong> <?= esc($m['merk_mobil']); ?></li>
                        <li><strong>Tahun:</strong> <?= esc($m['tahun_mobil']); ?></li>
                        <li><strong>Jenis:</strong> <?= esc($m['jenis_mobil']); ?></li>
                    </ul>
                    <div class="card-actions">
                        <a href="/admin/edit/<?= $m['id_mobil']; ?>" class="btn-action btn-edit">Edit</a>
                        <a href="/admin/delete/<?= $m['id_mobil']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn-action btn-delete">Hapus</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>
</html>