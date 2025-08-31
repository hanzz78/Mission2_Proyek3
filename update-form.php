<?php
include "koneksi-db.php";

$id = $_GET['id'];
$sql = "SELECT * FROM biodata WHERE id=$id";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>
    <h2>Edit Biodata</h2>
    <form action="update-biodata.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Nama: <input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br>
        tanggal lahir: <input type="text" name="tgl_lahir" value="<?php echo $row['tgl_lahir']; ?>"><br>
        Jenis Kelamin: <input type="text" name="jk" value="<?php echo $row['jk']; ?>"><br>
        <input type="submit" value="Update">
    </form>
<?php
} else {
    echo "Data tidak ditemukan.";
}
$koneksi->close();
?>
