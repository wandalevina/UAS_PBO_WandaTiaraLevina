<?php
require_once "../Database/koneksi.php";

$kontrak = mysqli_query($koneksi, "SELECT * FROM tabel_karyawan WHERE jenis_karyawan='Kontrak'");
$tetap   = mysqli_query($koneksi, "SELECT * FROM tabel_karyawan WHERE jenis_karyawan='Tetap'");
$magang  = mysqli_query($koneksi, "SELECT * FROM tabel_karyawan WHERE jenis_karyawan='Magang'");
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sistem Slip Gaji Karyawan</title>

<style>
body{
    font-family: Arial, sans-serif;
    background:#eaf6ff;
    margin:0;
    padding:30px;
}

h1{
    text-align:center;
    color:#0b6db8;
}

.section{
    margin-top:40px;
}

.section h2{
    background:#74c0fc;
    color:white;
    padding:12px;
    border-radius:8px;
}

table{
    width:100%;
    border-collapse:collapse;
    background:white;
    margin-top:10px;
}

table th{
    background:#d0ebff;
    padding:10px;
}

table td{
    padding:10px;
    border:1px solid #ddd;
}

table tr:hover{
    background:#f1f9ff;
}
</style>

</head>
<body>

<h1>💙 Sistem Slip Gaji Karyawan</h1>

<div class="section">
    <h2>Karyawan Kontrak</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Departemen</th>
            <th>Durasi Kontrak</th>
            <th>Agensi</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($kontrak)) { ?>
        <tr>
            <td><?= $row['id_karyawan']; ?></td>
            <td><?= $row['nama_karyawan']; ?></td>
            <td><?= $row['departemen']; ?></td>
            <td><?= $row['durasi_kontrak_bulan']; ?> Bulan</td>
            <td><?= $row['agensi_penyalur']; ?></td>
        </tr>
        <?php } ?>
    </table>
</div>

<div class="section">
    <h2>Karyawan Tetap</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Departemen</th>
            <th>Tunjangan Kesehatan</th>
            <th>Opsi Saham</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($tetap)) { ?>
        <tr>
            <td><?= $row['id_karyawan']; ?></td>
            <td><?= $row['nama_karyawan']; ?></td>
            <td><?= $row['departemen']; ?></td>
            <td>Rp <?= number_format($row['tunjangan_kesehatan'],0,',','.'); ?></td>
            <td><?= $row['opsi_saham_id']; ?></td>
        </tr>
        <?php } ?>
    </table>
</div>

<div class="section">
    <h2>Karyawan Magang</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Departemen</th>
            <th>Uang Saku</th>
            <th>Sertifikat MBKM</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($magang)) { ?>
        <tr>
            <td><?= $row['id_karyawan']; ?></td>
            <td><?= $row['nama_karyawan']; ?></td>
            <td><?= $row['departemen']; ?></td>
            <td>Rp <?= number_format($row['uang_saku_bulanan'],0,',','.'); ?></td>
            <td><?= $row['sertifikat_kampus_merdeka']; ?></td>
        </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>