<?php

require_once "Karyawan.php";

class KaryawanTetap extends Karyawan
{
    protected $tunjanganKesehatan;
    protected $opsiSahamId;

    public function hitungGajiBersih()
    {
        return ($this->hariKerjaMasuk * $this->gajiDasarPerHari) + $this->tunjanganKesehatan;
    }

    public function tampilkanProfilKaryawan()
    {
        return "";
    }

    public static function getDataKaryawanTetap($koneksi)
    {
        $query = "SELECT * FROM tabel_karyawan
                  WHERE jenis_karyawan = 'Tetap'";

        return mysqli_query($koneksi, $query);
    }
}

?>