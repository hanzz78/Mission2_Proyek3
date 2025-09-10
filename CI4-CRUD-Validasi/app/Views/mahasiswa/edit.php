<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h1>Edit Mahasiswa</h1>
    <form action="/mahasiswa/update/<?= $mahasiswa['nim']; ?>" method="post">
        <p>NIM: <input type="text" name="nim" value="<?= $mahasiswa['nim']; ?>" ></p>
        <p>Nama: <input type="text" name="nama_lengkap" value="<?= $mahasiswa['nama_lengkap']; ?>"></p>
        <p>Umur: <input type="number" name="umur" value="<?= $mahasiswa['umur']; ?>"></p>
        <button type="submit">Update</button>
        <a href="/mahasiswa">Kembali</a>
    </form>
</body>
</html>
