<?php

class Mahasiswa {
    public $nama='nama',
           $alamat='alamat',
           $kota='kota',
           $jkelamin='jkelamin';

    private $nilai1,
            $nilai2,
            $nilai3;
    
    public function __construct($nama, $alamat) {
        $this->nama = $nama;
        $this->alamat = $alamat; 
    }

    public function getMhs() {
        return "$this->nama | $this->alamat";
    }

    public function getNilai1() {
        return $this->nilai1=100;
    }
    public function getNilai2() {
        return $this->nilai2=85;
    }
    public function getNilai3() {
        $n1=$this->nilai1;
        $n2=$this->nilai2;
        $n3=(0.4 * $n1) + (0.6 * $n2);
        return $n3;
    }
}

class Akuntansi extends Mahasiswa {
    public $matkul1;
    public function __construct($nama, $alamat, $jurusan, $matkul1){
        parent::__construct($nama,$alamat);
        $this->jurusan=$jurusan;
        $this->matkul1=$matkul1;
    }
    public function cetak() {
        $str = parent::getMhs()." | {$this->jurusan} | {$this->matkul1}";
        return $str;
    }
}

class Informatika extends Mahasiswa {
    public $matkul1;
    public function __construct($nama, $alamat, $jurusan, $matkul1){
        parent::__construct($nama,$alamat);
        $this->jurusan=$jurusan;
        $this->matkul1=$matkul1;
    }
    public function cetak() {
        $str = parent::getMhs()." | {$this->jurusan} | {$this->matkul1}";
        return $str;
    }
}

$mhs1 = new Akuntansi("Ali", "Dukuh Kupang", "Akuntansi", "Manajemen Keuangan");
$mhs2 = new Informatika("Umar", "Delta Sari", "Informatika","Basis Data");
$mhs3 = new Akuntansi("Aisyiah", "Darmo Permai", "Akuntansi", "Komunikasi Bisnis");

echo $mhs1->cetak();
echo "<br/>";
echo $mhs2->cetak();
echo "<br/>";
echo $mhs3->cetak();
echo "<hr/>";

echo "Nilai UTS : ". $mhs1->getNilai1();
echo "<br/>";
echo "Nilai UAS : ". $mhs1->getNilai2();
echo "<br/>";
echo "Nilai Akhir : ". $mhs1->getNilai3();

?>