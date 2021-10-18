<?php

class Apotek { // parent
    public $nama_obat = "obat", 
           $kategori = "kategori", 
           $kemasan = "kemasan", 
           $segmentasi = "segmentasi", 
           $fabrikasi = "fabrikasi", 
           $harga = "harga";
    
    public function __construct($nama_obat, $kategori, $kemasan) { // constructor
        $this->nama_obat = $nama_obat;
        $this->kategori = $kategori;
        $this->kemasan = $kemasan;
        
    }
    public function getObat() { // method
        return "$this->nama_obat | $this->kategori | $this->kemasan";
    }
}

class Biru extends Apotek { // child
    public $segmentasi;
    public function __construct($nama_obat, $kategori, $kemasan, $segmentasi, $fabrikasi, $harga) {
        parent::__construct($nama_obat, $kategori, $kemasan);
        $this->segmentasi = $segmentasi;
        $this->fabrikasi = $fabrikasi;
        $this->harga = $harga;
    }
    public function cetak() {
        $str = parent::getObat()." | {$this->segmentasi} | {$this->fabrikasi} | {$this->harga}";
        return $str;
    }
}
class Hijau extends Apotek {
    public $segmentasi;
    public function __construct($nama_obat, $kategori, $kemasan, $segmentasi, $fabrikasi, $harga) {
        parent::__construct($nama_obat, $kategori, $kemasan);
        $this->segmentasi = $segmentasi;
        $this->fabrikasi = $fabrikasi;
        $this->harga = $harga;
    }
    public function cetak() {
        $str = parent::getObat()." | {$this->segmentasi} | {$this->fabrikasi} | {$this->harga}";
        return $str;
    }
}
class Merah extends Apotek {
    public $segmentasi;
    public function __construct($nama_obat, $kategori, $kemasan, $segmentasi, $fabrikasi, $harga) {
        parent::__construct($nama_obat, $kategori, $kemasan);
        $this->segmentasi = $segmentasi;
        $this->fabrikasi = $fabrikasi;
        $this->harga = $harga;
    }
    public function cetak() {
        $str = parent::getObat()." | {$this->segmentasi} | {$this->fabrikasi} | {$this->harga}";
        return $str;
    }
}

$obt1 = new Biru("Bodrex","Obat Sakit Kepala", "1 Strip isi 4 Tablet","Biru","Tempo Scan","2350"); // new object
$obt2 = new Hijau("Laserin","Obat Batuk dan Pilek", "1 Botol 100ml","Hijau","Mecosin","13500");
$obt3 = new Merah("Gentamicyn","Salep Antibiotik", "1 Tube 5gr","Merah","Kimia Farma","4200");
$obt4 = new Biru("Demacolin","Obat Batuk dan Pilek", "1 Strip isi 10 Tablet","Biru","Coronet Crown","5200");
$obt5 = new Hijau("Imboost Force","Suplemen", "1 Strip isi 10 Tablet","Hijau","Soho","27500");

echo "<h3>Task Mandiri OOP</h3>";
echo $obt1->cetak();
echo "<br/>";
echo $obt2->cetak();
echo "<br/>";
echo $obt3->cetak();
echo "<br/>";
echo $obt4->cetak();
echo "<br/>";
echo $obt5->cetak();
echo "<hr/>";

?>