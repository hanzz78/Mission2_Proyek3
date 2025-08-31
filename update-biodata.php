<?php
include "koneksi-db.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];
$Jenis_Kelamin = $_POST['jk'];

$sql = "UPDATE biodata SET nama='$nama', tgl_lahir='$tgl_lahir', jk='$Jenis_Kelamin' WHERE id=$id";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil diupdate. <a href='list-biodata.php'>Lihat Data</a>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
