<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Manajemen Daftar Mobil</h1>
    <a href="/admin/create">Tambah Mobil Baru</a>
    <table border="1">
        <tr>
            <th>Nama Mobil</th>
            <th>Merk</th>
            <th>Tahun</th>
            <th>Jenis</th>
            <th>Aksi</th>
        </tr>
        <?php foreach($mobil as $m): ?>
        <tr>
            <td><?= $m['nama_mobil']; ?></td>
            <td><?= $m['merk_mobil']; ?></td>
            <td><?= $m['tahun_mobil']; ?></td>
            <td><?= $m['jenis_mobil']; ?></td>
            <td>
                <a href="/admin/edit/<?= $m['id_mobil']; ?>">Edit</a>
                <a href="/admin/delete/<?= $m['id_mobil']; ?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>