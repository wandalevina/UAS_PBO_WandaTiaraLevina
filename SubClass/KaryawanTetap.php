<?php

require_once "../AbstractClass/Karyawan.php";

class KaryawanTetap extends Karyawan
{
    protected $tunjanganKesehatan;
    protected $opsiSahamId;

    public function hitungGajiBersih()
    {
        return ($this->hariKerjaMasuk * $this->gajiDasarPerHari)
                + $this->tunjanganKesehatan;
    }

    public function tampilkanProfilKaryawan()
    {
        return "
        ID Karyawan : {$this->id_karyawan}<br>
        Nama : {$this->nama_karyawan}<br>
        Departemen : {$this->departemen}<br>
        Tunjangan Kesehatan : {$this->tunjanganKesehatan}<br>
        Opsi Saham : {$this->opsiSahamId}<br>
        ";
    }

    public static function getDataKaryawanTetap($koneksi)
    {
        $query = "SELECT * FROM tabel_karyawan
                  WHERE jenis_karyawan='Tetap'";

        return mysqli_query($koneksi, $query);
    }
}
?>