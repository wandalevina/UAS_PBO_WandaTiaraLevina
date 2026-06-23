<?php

require_once "Karyawan.php";

class KaryawanKontrak extends Karyawan
{
    protected $durasiKontrakBulan;
    protected $agensiPenyalur;

    public function hitungGajiBersih()
    {
        return 0;
    }

    public function tampilkanProfilKaryawan()
    {
        return "";
    }

    public static function getDataKaryawanKontrak($koneksi)
    {
        $query = "SELECT * FROM tabel_karyawan 
                  WHERE jenis_karyawan = 'Kontrak'";

        return mysqli_query($koneksi, $query);
    }
}

?>