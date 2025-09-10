<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h1>Tambah Mahasiswa</h1>
    <form action="/mahasiswa/store" method="post">
        <p>NIM: <input type="text" name="nim"></p>
        <p>Nama: <input type="text" name="nama_lengkap"></p>
        <p>Umur: <input type="number" name="umur"></p>
        <button type="submit">Simpan</button>
        <a href="/mahasiswa">Kembali</a>
    </form>
</body>
</html>
