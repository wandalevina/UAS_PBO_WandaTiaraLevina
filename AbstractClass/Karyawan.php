<?php

abstract class Karyawan
{
    protected $id_karyawan;
    protected $nama_karyawan;
    protected $departemen;
    protected $hariKerjaMasuk;
    protected $gajiDasarPerHari;

    abstract public function hitungGajiBersih();

    abstract public function tampilkanProfilKaryawan();
}

?>