<?php
// table_loop.php - Menampilkan tabel HTML dengan looping PHP (dinamis)
$title = "Tabel HTML (Looping)";
$mahasiswa = [
  ["NIM"=>"241511082","NAMA"=>"Muhammad Brata","Jurusan"=>"eknik Informatika"],
  ["NIM"=>"241511065","NAMA"=>"Alexandrio","Jurusan"=>"Teknik Informatika"],
  ["NIM"=>"241511087","NAMA"=>"Nezya Zulfa","Jurusan"=>"Teknik Informatika"],
];
?>
<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title><?= $title ?></title></head>
<body>
  <h1><?= $title ?></h1>
  <table border="1" cellpadding="6" cellspacing="0">
    <thead>
      <tr><th>No</th><th>NIM</th><th>NAMA</th><th>Jurusan</th></tr>
    </thead>
    <tbody>
      <?php $no=1; foreach ($mahasiswa as $m): ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= htmlspecialchars($m['NIM']) ?></td>
          <td><?= htmlspecialchars($m['NAMA']) ?></td>
          <td><?= htmlspecialchars($m['Jurusan']) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>
