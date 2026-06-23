<?php

require_once "../AbstractClass/Karyawan.php";

class KaryawanKontrak extends Karyawan
{
    protected $durasiKontrakBulan;
    protected $agensiPenyalur;

    public function hitungGajiBersih()
    {
        return $this->hariKerjaMasuk * $this->gajiDasarPerHari;
    }

    public function tampilkanProfilKaryawan()
    {
        return "
        ID Karyawan : {$this->id_karyawan}<br>
        Nama : {$this->nama_karyawan}<br>
        Departemen : {$this->departemen}<br>
        Durasi Kontrak : {$this->durasiKontrakBulan} Bulan<br>
        Agensi Penyalur : {$this->agensiPenyalur}<br>
        ";
    }

    public static function getDataKaryawanKontrak($koneksi)
    {
        $query = "SELECT * FROM tabel_karyawan
                  WHERE jenis_karyawan='Kontrak'";

        return mysqli_query($koneksi, $query);
    }
}
?>