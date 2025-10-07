<?php
include 'koneksi.php';
$id_siswa = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id_siswa='$id_siswa'");
$row = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Edit Data</title>
</head>

<body>
  <h2>Edit Data Siswa</h2>
  <form action="" method="POST">
    <label>NIS:</label><br>
    <input type="text" name="nis" value="<?= $row['nis']; ?>"><br>

    <label>Nama Siswa:</label><br>
    <input type="text" name="nama_siswa" value="<?= $row['nama_siswa']; ?>"><br>

    <label>Alamat:</label><br>
    <textarea name="alamat"><?= $row['alamat']; ?></textarea><br><br>

    <button type="submit" name="update">Update</button>
  </form>

  <?php
  if (isset($_POST['update'])) {
    $nis = $_POST['nis'];
    $nama_siswa = $_POST['nama_siswa'];
    $alamat = $_POST['alamat'];

    // Perbaikan di sini: gunakan nama kolom & variabel yang benar
    mysqli_query($koneksi, "UPDATE siswa SET nis='$nis', nama_siswa='$nama_siswa', alamat='$alamat' WHERE id_siswa='$id_siswa'");

    // Redirect ke halaman utama
    header("Location: index.php");
    exit;
  }
  ?>
</body>

</html>