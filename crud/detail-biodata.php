<?php
include "koneksi-db.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM biodata WHERE id=$id";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Data tidak ditemukan.";
        exit;
    }
} else {
    echo "ID tidak ditemukan.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Biodata</title>
</head>
<body>
    <h2>Detail Biodata</h2>
    <p><b>Nama:</b> <?= $row['nama']; ?></p>
    <p><b>NIM:</b> <?= $row['nim']; ?></p>
    <p><b>Tanggal Lahir:</b> <?= $row['tgl_lahir']; ?></p>
    <p><b>Jenis Kelamin:</b> <?= $row['jk']; ?></p>

    <a href="list-biodata.php">Kembali ke List</a>
</body>
</html>
