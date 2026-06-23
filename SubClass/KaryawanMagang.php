<?php

require_once "../AbstractClass/Karyawan.php";

class KaryawanMagang extends Karyawan
{
    protected $uangSakuBulanan;
    protected $sertifikatKampusMerdeka;

    public function hitungGajiBersih()
    {
        return ($this->hariKerjaMasuk * $this->gajiDasarPerHari)
                * 0.80;
    }

    public function tampilkanProfilKaryawan()
    {
        return "
        ID Karyawan : {$this->id_karyawan}<br>
        Nama : {$this->nama_karyawan}<br>
        Departemen : {$this->departemen}<br>
        Uang Saku : {$this->uangSakuBulanan}<br>
        Sertifikat Kampus Merdeka : {$this->sertifikatKampusMerdeka}<br>
        ";
    }

    public static function getDataKaryawanMagang($koneksi)
    {
        $query = "SELECT * FROM tabel_karyawan
                  WHERE jenis_karyawan='Magang'";

        return mysqli_query($koneksi, $query);
    }
}
?>