<?php

class Mahasiswa {
    public $nama='nama',
           $alamat='alamat',
           $kota='kota',
           $jkelamin='jkelamin';
    
    public function __construct($nama1, $alamat1, $kota1, $jkelamin1) {
        $this->nama = $nama1;
        $this->alamat = $alamat1; 
        $this->kota = $kota1; 
        $this->jkelamin = $jkelamin1;
    }

    public function getMhs() {
        return "$this->nama, $this->alamat, $this->kota, $this->jkelamin";
    }
}

class CetakMhs {
    public function cetak(Mahasiswa $mhs) {
        $str = "$mhs->nama ~ $mhs->alamat ~ $mhs->kota ~ $mhs->jkelamin";
        return $str;
    }
}

$mhs1 = new Mahasiswa("Ali", "Dukuh Kupang", "Surabaya", "Laki-laki");
$mhs2 = new Mahasiswa("Umar", "Delta Sari", "Surabaya", "Laki-laki");
$mhs3 = new Mahasiswa("Aisyiah", "Darmo Permai", "Surabaya", "Perempuan");
$mhs4 = new CetakMhs();
echo $mhs4->cetak($mhs1);
echo "<br>";
echo $mhs4->cetak($mhs2);
echo "<br>";
echo $mhs4->cetak($mhs3);
echo "<br>";

?>