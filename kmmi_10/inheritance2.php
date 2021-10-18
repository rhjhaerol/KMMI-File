<?php

class Mahasiswa {
    public $nama='nama',
           $alamat='alamat',
           $kota='kota',
           $jkelamin='jkelamin';
    
    public function __construct($nama, $alamat, $jurusan, $matkul1, $matkul2) {
        $this->nama = $nama;
        $this->alamat = $alamat; 
        $this->jurusan = $jurusan; 
        $this->matkul1 = $matkul1; 
        $this->matkul2 = $matkul2; 
    }

    public function getMhs() {
        return "$this->nama | $this->alamat";
    }
    public function getMatkul(){
        $str = "{$this->getMhs()} | {$this->jurusan} | ";
        if ($this->jurusan=="Akuntansi") {
            $str .= " {$this->matkul1}";
        } elseif ($this->jurusan=="Informatika") {
            $str .= " {$this->matkul2}";
        }
        return $str;
    }
}

// class CetakMhs {
//     public function cetak(Mahasiswa $mhs) {
//         $str = "$mhs->nama ~ $mhs->alamat ~ $mhs->kota ~ $mhs->jkelamin";
//         return $str;
//     }
// }

$mhs1 = new Mahasiswa("Ali", "Dukuh Kupang", "Akuntansi", "Manajemen Keuangan","~");
$mhs2 = new Mahasiswa("Umar", "Delta Sari", "Informatika", "~","Basis Data");
$mhs3 = new Mahasiswa("Aisyiah", "Darmo Permai", "Akuntansi", "Komunikasi Bisnis","~");

echo $mhs1->getMatkul();
echo "<br/>";
echo $mhs2->getMatkul();
echo "<br/>";
echo $mhs3->getMatkul();
?>