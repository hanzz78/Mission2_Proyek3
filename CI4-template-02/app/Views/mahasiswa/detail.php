<!DOCTYPE html>
<html>
<head>
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h1>Detail Mahasiswa</h1>
    <p>NIM: <?= $mahasiswa['nim']; ?></p>
    <p>Nama: <?= $mahasiswa['nama_lengkap']; ?></p>
    <p>Umur: <?= $mahasiswa['umur']; ?></p>
    <a href="/mahasiswa">Kembali</a>
</body>
</html>
