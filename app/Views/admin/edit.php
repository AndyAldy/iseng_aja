<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Mobil</title>
</head>
<body>
    <h1>Form Edit Mobil</h1>
    <form action="/admin/update/<?= $mobil['id_mobil']; ?>" method="post">
        <label for="nama_mobil">Nama Mobil:</label><br>
        <input type="text" id="nama_mobil" name="nama_mobil" value="<?= $mobil['nama_mobil']; ?>"><br>
        <label for="merk_mobil">Merk Mobil:</label><br>
        <input type="text" id="merk_mobil" name="merk_mobil" value="<?= $mobil['merk_mobil']; ?>"><br>
        <label for="tahun_mobil">Tahun Mobil:</label><br>
        <input type="text" id="tahun_mobil" name="tahun_mobil" value="<?= $mobil['tahun_mobil']; ?>"><br>
        <label for="jenis_mobil">Jenis Mobil:</label><br>
        <select id="jenis_mobil" name="jenis_mobil">
            <option value="SUV" <?= ($mobil['jenis_mobil'] == 'SUV') ? 'selected' : ''; ?>>SUV</option>
            <option value="Sedan" <?= ($mobil['jenis_mobil'] == 'Sedan') ? 'selected' : ''; ?>>Sedan</option>
            <option value="MPV" <?= ($mobil['jenis_mobil'] == 'MPV') ? 'selected' : ''; ?>>MPV</option>
            <option value="HatchBack" <?= ($mobil['jenis_mobil'] == 'HatchBack') ? 'selected' : ''; ?>>HatchBack</option>
            <option value="LCGC" <?= ($mobil['jenis_mobil'] == 'LCGC') ? 'selected' : ''; ?>>LCGC</option>
        </select><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>