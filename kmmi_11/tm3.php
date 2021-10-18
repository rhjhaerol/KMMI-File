<?php

class Apotek { // parent
    public $nama_obat = "obat", 
           $kategori = "kategori", 
           $kemasan = "kemasan", 
           $segmentasi = "segmentasi", 
           $fabrikasi = "fabrikasi"; 
    
    private $harga,
            $diskon,
            $totalHarga;
    
    public function __construct($nama_obat, $kategori, $kemasan) { // constructor
        $this->nama_obat = $nama_obat;
        $this->kategori = $kategori;
        $this->kemasan = $kemasan;
        
    }
    public function getObat() { // method
        return "$this->nama_obat | $this->kategori | $this->kemasan";
    }

    public function getHarga() {
        return "$this->harga | $this->diskon";
    }
    public function getDiskon() {
        return "$this->diskon";
    }
    public function setHarga($harga) {
        if (!is_numeric($harga)) {
            throw new Exception("Nilai yang dimasukan harus numerik !");
        }
        $this->harga=$harga;
    }
    public function setDiskon($diskon) {
        if (!is_numeric($diskon)) {
            throw new Exception("Nilai yang dimasukan harus numerik !");
        }
        $this->diskon=$diskon;
    }
    public function getTotalHarga() {
        $hrg=$this->harga;  
        $dsc=$this->diskon;
        $thrg=$hrg * (100-$dsc)/100;
        return $thrg;
    }
}

class Biru extends Apotek { // child
    public $segmentasi;
    public function __construct($nama_obat, $kategori, $kemasan, $segmentasi, $fabrikasi, $harga, $diskon, $totalHarga) {
        parent::__construct($nama_obat, $kategori, $kemasan);
        $this->segmentasi = $segmentasi;
        $this->fabrikasi = $fabrikasi;
        $this->setHarga(8500);
        $this->setDiskon(0);
        $this->getTotalHarga();
    }

    public function cetak() {
        $str = parent::getObat()." | {$this->segmentasi} | {$this->fabrikasi} | ".parent::getHarga()." | ".parent::getDiskon()." | ".parent::getTotalHarga();
        return $str;
    }
}
class Hijau extends Apotek {
    public $segmentasi;
    public function __construct($nama_obat, $kategori, $kemasan, $segmentasi, $fabrikasi, $harga, $diskon, $totalHarga) {
        parent::__construct($nama_obat, $kategori, $kemasan);
        $this->segmentasi = $segmentasi;
        $this->fabrikasi = $fabrikasi;
        $this->setHarga(17500);
        $this->setDiskon(5);
        $this->getTotalHarga();
    }
    public function cetak() {
        $str = parent::getObat()." | {$this->segmentasi} | {$this->fabrikasi} | ".parent::getHarga()." | ".parent::getDiskon()." | ".parent::getTotalHarga();
        return $str;
    }
}
class Merah extends Apotek {
    public $segmentasi;
    public function __construct($nama_obat, $kategori, $kemasan, $segmentasi, $fabrikasi, $harga, $diskon, $totalHarga) {
        parent::__construct($nama_obat, $kategori, $kemasan);
        $this->segmentasi = $segmentasi;
        $this->setHarga(48500);
        $this->setDiskon(10);
        $this->getTotalHarga();
    }
    public function cetak() {
        $str = parent::getObat()." | {$this->segmentasi} | {$this->fabrikasi} | ".parent::getHarga()." | ".parent::getDiskon()." | ".parent::getTotalHarga();
        return $str;
    }
}

$obt1 = new Biru("Bodrex","Obat Sakit Kepala", "1 Strip isi 4 Tablet","Biru","Tempo Scan","","",""); // new object
$obt2 = new Hijau("Laserin","Obat Batuk dan Pilek", "1 Botol 100ml","Hijau","Mecosin","","","");
$obt3 = new Merah("Gentamicyn","Salep Antibiotik", "1 Tube 5gr","Merah","Kimia Farma","","","");
$obt4 = new Biru("Demacolin","Obat Batuk dan Pilek", "1 Strip isi 10 Tablet","Biru","Coronet Crown","","","");
$obt5 = new Hijau("Imboost Force","Suplemen", "1 Strip isi 10 Tablet","Hijau","Soho","","","");

echo "<h3>Task Mandiri Setter and Getter</h3>";
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