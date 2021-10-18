<?php

class Mahasiswa {
    public $nama='nama',
           $alamat='alamat',
           $kota='kota',
           $jkelamin='jkelamin';
    
    public function __construct($nama, $alamat) {
        $this->nama = $nama;
        $this->alamat = $alamat; 
    }

    public function getMhs() {
        return "$this->nama | $this->alamat";
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

echo "
    <table>
        <tr>
            <th>Nama</th>
            <th>\t|\tAlamat</th>
            <th>\t|\tJurusan</th>
            <th>\t|\tMatakuliah</th>  
        </tr>
    </table>
";

echo $mhs1->cetak();
echo "<br/>";
echo $mhs2->cetak();
echo "<br/>";
echo $mhs3->cetak();

?>