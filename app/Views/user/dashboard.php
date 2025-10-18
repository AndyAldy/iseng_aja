<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mobil</title>
</head>
<body>
    <h1>Daftar Mobil Tersedia</h1>
    <table border="1">
        <tr>
            <th>Nama Mobil</th>
            <th>Merk</th>
            <th>Tahun</th>
            <th>Jenis</th>
        </tr>
        <?php foreach($mobil as $m): ?>
        <tr>
            <td><?= $m['nama_mobil']; ?></td>
            <td><?= $m['merk_mobil']; ?></td>
            <td><?= $m['tahun_mobil']; ?></td>
            <td><?= $m['jenis_mobil']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>