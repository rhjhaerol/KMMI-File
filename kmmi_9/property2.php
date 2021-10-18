<?php

class Mahasiswa {
    public $nama='nama',
           $alamat='alamat',
           $kota='kota',
           $jkelamin='jkelamin';
}

$mhs1 = new Mahasiswa();
$mhs1 -> nama='Ali';
$mhs1 -> alamat='Dukuh Kupang';
$mhs1 -> kota='Surabaya';
$mhs1 -> jkelamin='Laki-laki';

$mhs2 = new Mahasiswa();
$mhs2 -> nama='Umar';
$mhs2 -> alamat='Delta Sari';
$mhs2 -> kota='Sidoarjo';
$mhs2 -> jkelamin='Laki-laki';

$mhs3 = new Mahasiswa();
$mhs3 -> nama='Aisyiah';
$mhs3 -> alamat='Darmo Permai';
$mhs3 -> kota='Surabaya';
$mhs3 -> jkelamin='Perempuan';

var_dump($mhs1);
var_dump($mhs2);
var_dump($mhs3);

?>