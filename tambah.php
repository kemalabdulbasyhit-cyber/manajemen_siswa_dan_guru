<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Tambah Data</title>
</head>

<body>
  <h2>Tambah Data Siswa</h2>
  <form action="" method="POST">
    <label>NIS:</label><br>
    <input type="text" name="nis"><br>
    <label>Nama:</label><br>
    <input type="text" name="nama"><br>
    <label>Alamat:</label><br>
    <textarea name="alamat"></textarea><br><br>
    <button type="submit" name="simpan">Simpan</button>
  </form>

  <?php
  if (isset($_POST['simpan'])) {
    $nis = $_POST['nis'];
    $nama_siswa = $_POST['nama_siswa'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO siswa (nis, nama_siswa, alamat) VALUES ('$nis', '$nama_siswa', '$alamat')";
    mysqli_query($koneksi, $query);

    header("Location: index.php");
  }
  ?>
</body>

</html>