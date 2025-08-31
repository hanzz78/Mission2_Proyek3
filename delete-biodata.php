<?php
include "koneksi-db.php";

$id = $_GET['id'];

$sql = "DELETE FROM biodata WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dihapus. <a href='list-biodata.php'>Kembali</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
