<?php

class Mahasiswa {
    public $nama='nama',
           $alamat='alamat',
           $kota='kota',
           $jkelamin='jkelamin',
           $nilai1;
    
    protected $nilai2;

    private $nilai3;
    
    public function __construct($nama, $alamat) {
        $this->nama = $nama;
        $this->alamat = $alamat; 
    }

    public function getMhs() {
        return "$this->nama | $this->alamat";
    }

    public function getNilai3() {
        return $this->$nilai3=45;
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
    public function getNilai2() {
        return $this->$nilai3=100;
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

echo "Nilai visibility Public : ". $mhs1->$nilai1=85;
echo "Nilai visibility Protected : ". $mhs1->getNilai2();
echo "Nilai visibility Private : ". $mhs1->getNilai3();

?>