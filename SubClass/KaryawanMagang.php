<?php

require_once "Karyawan.php";

class KaryawanMagang extends Karyawan
{
    protected $uangSakuBulanan;
    protected $sertifikatKampusMerdeka;

    public function hitungGajiBersih()
    {
        return 0;
    }

    public function tampilkanProfilKaryawan()
    {
        return "";
    }

    public static function getDataKaryawanMagang($koneksi)
    {
        $query = "SELECT * FROM tabel_karyawan 
                  WHERE jenis_karyawan = 'Magang'";

        return mysqli_query($koneksi, $query);
    }
}

?>