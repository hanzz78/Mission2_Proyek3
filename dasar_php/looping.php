<?php
// Contoh instruksi pengulangan: for
$limit = 5;
?>

<!DOCTYPE html>
<html>
<head><title>Instruksi Pengulangan</title></head>
<body>
  <h2>Menampilkan angka 1 sampai <?php echo $limit; ?></h2>
  <ul>
    <?php
    for ($i = 1; $i <= $limit; $i++) {
        echo "<li>Angka ke-$i</li>";
    }
    ?>
  </ul>
</body>
</html>
