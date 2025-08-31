<?php
$host = "localhost";
$user = "root"; // default user XAMPP
$pass = "";     // default password kosong
$db   = "mahasiswa_db";

// buat koneksi
$koneksi = mysqli_connect($host, $user, $pass, $db);

// cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
