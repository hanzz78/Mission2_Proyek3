<?php
// Contoh instruksi pemilihan: if else
$nilai = 80;
$grade = "";

if ($nilai >= 85) {
    $grade = "A";
} elseif ($nilai >= 70) {
    $grade = "B";
} else {
    $grade = "C";
}
?>

<!DOCTYPE html>
<html>
<head><title>Instruksi Pemilihan</title></head>
<body>
  <h2>Nilai anda: <?php echo $nilai; ?></h2>
  <p>Grade: <strong><?php echo $grade; ?></strong></p>
</body>
</html>
