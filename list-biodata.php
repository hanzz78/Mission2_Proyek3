<?php
include "koneksi-db.php";

$sql = "SELECT * FROM biodata";
$result = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>List Biodata</title>
</head>
<body>
    <h2>List Biodata Mahasiswa</h2>
    <a href="biodata-form.php">+ Tambah Data</a>
    <br><br>
    <table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th></th>
    </tr>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?= $row["id"] ?></td>
        <td><?= $row["nama"] ?></td>
        <td><?= $row["nim"] ?></td>
        <td><?= $row["tgl_lahir"] ?></td>
        <td><?= $row["jk"] ?></td>
        <td>
            <a href="detail-biodata.php?id=<?= $row["id"] ?>">Detail</a> | 
            <a href="update-form.php?id=<?= $row["id"] ?>">Edit</a> | 
            <a href="delete-biodata.php?id=<?= $row["id"] ?>" onclick="return confirm('Yakin mau hapus?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>

</body>
</html>
