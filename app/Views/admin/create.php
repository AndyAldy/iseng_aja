<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mobil Baru</title>
</head>
<body>
    <h1>Form Tambah Mobil</h1>
    <form action="/admin/store" method="post">
        <label for="nama_mobil">Nama Mobil:</label><br>
        <input type="text" id="nama_mobil" name="nama_mobil"><br>
        <label for="merk_mobil">Merk Mobil:</label><br>
        <input type="text" id="merk_mobil" name="merk_mobil"><br>
        <label for="tahun_mobil">Tahun Mobil:</label><br>
        <input type="text" id="tahun_mobil" name="tahun_mobil"><br>
        <label for="jenis_mobil">Jenis Mobil:</label><br>
        <select id="jenis_mobil" name="jenis_mobil">
            <option value="SUV">SUV</option>
            <option value="Sedan">Sedan</option>
            <option value="MPV">MPV</option>
            <option value="HatchBack">HatchBack</option>
            <option value="LCGC">LCGC</option>
        </select><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>