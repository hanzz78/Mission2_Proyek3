<?php
include "koneksi-db.php";

$id = $_GET['id'];
$sql = "SELECT * FROM biodata WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>
    <h2>Edit Biodata</h2>
    <form action="update-biodata.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Nama: <input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br>
        Alamat: <input type="text" name="alamat" value="<?php echo $row['alamat']; ?>"><br>
        Jurusan: <input type="text" name="jurusan" value="<?php echo $row['jurusan']; ?>"><br>
        <input type="submit" value="Update">
    </form>
<?php
} else {
    echo "Data tidak ditemukan.";
}
$conn->close();
?>
