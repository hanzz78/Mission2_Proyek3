<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Biodata Mahasiswa</title>
</head>
<body>
    <h2>Form Biodata Mahasiswa</h2>
    <form method="POST" action="biodata-db.php">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>NIM:</label><br>
        <input type="text" name="nim" required><br><br>

        <label>Tanggal Lahir:</label><br>
        <input type="date" name="tgl_lahir" required><br><br>

        <label>Jenis Kelamin:</label><br>
        <input type="radio" name="jk" value="Laki-laki" required> Laki-laki
        <input type="radio" name="jk" value="Perempuan"> Perempuan
        <br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
