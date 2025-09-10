<!DOCTYPE html>
<html>
<head>
    <title><?= $title; ?></title>
</head>
<body>
    <h1><?= $title; ?></h1>
    <br><br>
    <table border="10" cellpadding="8">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Aksi</th>
        </tr>
        <?php foreach($mahasiswa as $m): ?>
        <tr>
            <td><?= $m['nim']; ?></td>
            <td><?= $m['nama_lengkap']; ?></td>
            <td><?= $m['umur']; ?></td>
            <td>
                <a href="/mahasiswa/detail/<?= $m['nim']; ?>">Detail</a> | 
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
