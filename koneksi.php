<?php
$host = "localhost";
$user = "root";
$pass = "";
$conn  = "manajemen_siswa_dan_kelas";

$koneksi = mysqli_connect($host, $user, $pass, $conn);

if (!$koneksi) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
