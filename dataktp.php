<?php
    session_start();
    if( !isset($_SESSION["login"]) ){
        header("Location: login.php");
        exit;
    }

    require 'function.php';
    $data = query("SELECT * FROM tb_data_ktp");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data ktp</title>
</head>
<body>
<a href="logout.php">Logout</a>
<h1 style="text-align:center;" >DATA PESERTA PEMBUAT KTP</h1>
    <table border=2px; cellspacing=0; cellpadding=10;>
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tangggal Lahir</th>
            <th>Gender</th>
            <th>Gol-Darah</th>
            <th>Alamat</th>
            <th>RT</th>
            <th>RW</th>
            <th>Kelurahan</th>
            <th>Kecamatan</th>
            <th>Agama</th>
            <th>Pekerjaan</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($data as $dt) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $dt["nik"]; ?></td>
            <td><?= $dt["nama"]; ?></td>
            <td><?= $dt["tmp_lahir"]; ?></td>
            <td><?= $dt["tgl_lahir"]; ?></td>
            <td><?= $dt["gender"]; ?></td>
            <td><?= $dt["gol_darah"]; ?></td>
            <td><?= $dt["alamat"]; ?></td>
            <td><?= $dt["rt"]; ?></td>
            <td><?= $dt["rw"]; ?></td>
            <td><?= $dt["kelurahan"]; ?></td>
            <td><?= $dt["kecamatan"]; ?></td>
            <td><?= $dt["agama"]; ?></td>
            <td><?= $dt["pekerjaan"]; ?></td>
            <td><?= $dt["status"]; ?></td>
            <td>
                <a href="update.php?nik=<?= $dt["nik"]; ?>">edit</a> | 
                <a href="hapus.php?nik=<?= $dt["nik"]; ?>"
                onclick="return confirm('Apakah anda ingin menghapus data anda?');">hapus</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>