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
            <th>Keterangan</th>
        </tr>
        <?php while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id"]. 
         " - Nama: " . $row["nama"]. 
         " - Alamat: " . $row["alamat"]. 
         " - Jurusan: " . $row["jurusan"]. 
         " <a href='detail-biodata.php?id=".$row["id"]."'>Detail</a> | 
           <a href='update-form.php?id=".$row["id"]."'>Edit</a> | 
           <a href='delete-biodata.php?id=".$row["id"]."'>Hapus</a><br>";
}
        <?php } ?>
    </table>
</body>
</html>
