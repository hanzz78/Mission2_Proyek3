<?php
// table_basic.php - Menampilkan tabel HTML (statik)
$title = "Tabel HTML (Statik)";
?>
<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title><?= $title ?></title></head>
<body>
  <h1><?= $title ?></h1>
  <table border="1" cellpadding="6" cellspacing="0">
    <thead>
      <tr><th>No</th><th>NIM</th><th>Nama</th><th>Jurusan</th></tr>
    </thead>
    <tbody>
      <tr><td>1</td><td>24151104</td><td>raihan</td><td>Teknik Informatika</td></tr>
    </tbody>
  </table>
</body>
</html>
