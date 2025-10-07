<?php
include 'koneksi.php';
$id_siswa = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM siswa WHERE id_siswa='$id_siswa'");
header("Location: index.php");
?>
