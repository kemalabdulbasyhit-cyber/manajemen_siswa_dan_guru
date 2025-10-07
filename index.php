<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Data Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Data Siswa</h2>
    <a href="tambah.php">+ Tambah Data</a>
    <br><br>

    <table border="1" cellspacing="0" cellpadding="8">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM siswa");
        while ($row = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nis']; ?></td>
            <td><?= $row['nama_siswa']; ?></td>
            <td><?= $row['alamat']; ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id_siswa']; ?>">Edit</a> |
                <a href="hapus.php?id=<?= $row['id_siswa']; ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
