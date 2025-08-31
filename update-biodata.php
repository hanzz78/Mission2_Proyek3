<?php
include "koneksi-db.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];

$sql = "UPDATE biodata SET nama='$nama', alamat='$alamat', jurusan='$jurusan' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil diupdate. <a href='list-biodata.php'>Lihat Data</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
