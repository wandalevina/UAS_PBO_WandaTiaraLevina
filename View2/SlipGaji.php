<?php
require_once "../Database/koneksi.php";

$data = mysqli_query($koneksi, "SELECT * FROM tabel_karyawan");
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Slip Gaji Karyawan</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:#f5f7fb;
    padding:40px;
}

.judul{
    text-align:center;
    margin-bottom:40px;
}

.judul h1{
    color:#1f2937;
    font-size:38px;
    margin-bottom:8px;
}

.judul p{
    color:#6b7280;
}

.container{
    display:grid;
    grid-template-columns:repeat(auto-fill,minmax(400px,1fr));
    gap:25px;
}

.slip{
    background:white;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
    transition:0.3s;
}

.slip:hover{
    transform:translateY(-5px);
}

.header{
    background:#1e3a8a;
    color:white;
    padding:20px;
}

.header h2{
    font-size:20px;
}

.body{
    padding:25px;
}

.body p{
    margin:10px 0;
    color:#374151;
}

.label{
    font-weight:600;
    color:#111827;
}

hr{
    border:none;
    height:1px;
    background:#e5e7eb;
    margin:18px 0;
}

.gaji{
    margin-top:20px;
    background:#f8fafc;
    border:1px solid #e5e7eb;
    border-radius:15px;
    padding:20px;
}

.total{
    text-align:center;
    font-size:28px;
    font-weight:700;
    color:#2563eb;
}

.badge{
    display:inline-block;
    margin-top:10px;
    padding:6px 14px;
    border-radius:30px;
    font-size:12px;
    font-weight:600;
}

.kontrak{
    background:#dbeafe;
    color:#1d4ed8;
}

.tetap{
    background:#dcfce7;
    color:#15803d;
}

.magang{
    background:#fef3c7;
    color:#b45309;
}

.footer{
    padding:15px;
    text-align:center;
    background:#fafafa;
    color:#9ca3af;
    font-size:12px;
}

</style>

</head>
<body>

<div class="judul">
    <h1>💼 Sistem Slip Gaji Karyawan</h1>
    <p>DB_UAS_PBO_TRPL1B_WandaTiaraLevina</p>
</div>

<div class="container">

<?php while($row = mysqli_fetch_assoc($data)) : ?>

<?php

if($row['jenis_karyawan'] == 'Kontrak')
{
    $gajiBersih = 22 * $row['gaji_dasar_per_hari'];
    $badge = "kontrak";
}
elseif($row['jenis_karyawan'] == 'Tetap')
{
    $gajiBersih =
    (22 * $row['gaji_dasar_per_hari'])
    + $row['tunjangan_kesehatan'];

    $badge = "tetap";
}
else
{
    $gajiBersih =
    (22 * $row['gaji_dasar_per_hari'])
    * 0.80;

    $badge = "magang";
}

?>

<div class="slip">

    <div class="header">
        <h2>SLIP GAJI KARYAWAN</h2>

        <small>PT Wanda Tiara Levina Group</small>

        <br><br>

        <span class="badge <?= $badge ?>">
            <?= $row['jenis_karyawan']; ?>
        </span>
    </div>

    <div class="body">

        <p>
            <span class="label">ID Karyawan :</span>
            <?= $row['id_karyawan']; ?>
        </p>

        <p>
            <span class="label">Nama :</span>
            <?= $row['nama_karyawan']; ?>
        </p>

        <p>
            <span class="label">Departemen :</span>
            <?= $row['departemen']; ?>
        </p>

        <p>
            <span class="label">Tanggal Masuk :</span>
            <?= $row['hari_kerja_masuk']; ?>
        </p>

        <p>
            <span class="label">Gaji Dasar / Hari :</span>
            Rp <?= number_format($row['gaji_dasar_per_hari'],0,',','.'); ?>
        </p>

        <hr>

        <?php if($row['jenis_karyawan'] == 'Kontrak') : ?>

            <p>
                <span class="label">Durasi Kontrak :</span>
                <?= $row['durasi_kontrak_bulan']; ?> Bulan
            </p>

            <p>
                <span class="label">Agensi Penyalur :</span>
                <?= $row['agensi_penyalur']; ?>
            </p>

        <?php elseif($row['jenis_karyawan'] == 'Tetap') : ?>

            <p>
                <span class="label">Tunjangan Kesehatan :</span>
                Rp <?= number_format($row['tunjangan_kesehatan'],0,',','.'); ?>
            </p>

            <p>
                <span class="label">Opsi Saham :</span>
                <?= $row['opsi_saham_id']; ?>
            </p>

        <?php else : ?>

            <p>
                <span class="label">Uang Saku Bulanan :</span>
                Rp <?= number_format($row['uang_saku_bulanan'],0,',','.'); ?>
            </p>

            <p>
                <span class="label">Sertifikat MBKM :</span>
                <?= $row['sertifikat_kampus_merdeka']; ?>
            </p>

        <?php endif; ?>

        <div class="gaji">

            <p style="text-align:center;margin-bottom:10px;">
                Total Gaji Bersih
            </p>

            <div class="total">
                Rp <?= number_format($gajiBersih,0,',','.'); ?>
            </div>

        </div>

    </div>

    <div class="footer">
        Dicetak pada <?= date('d-m-Y'); ?>
    </div>

</div>

<?php endwhile; ?>

</div>

</body>
</html>