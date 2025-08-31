<?php
include "koneksi-db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama      = $_POST['nama'];
    $nim       = $_POST['nim'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jk        = $_POST['jk'];

    $sql = "INSERT INTO biodata (nama, nim, tgl_lahir, jk) 
            VALUES ('$nama', '$nim', '$tgl_lahir', '$jk')";
    if (mysqli_query($koneksi, $sql)) {
        echo "Data berhasil disimpan! <br>";
        echo "<a href='list-biodata.php'>Lihat Data</a>";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
