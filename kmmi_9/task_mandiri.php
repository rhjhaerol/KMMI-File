<?php

class Obat {
    public $nama_obat = "obat", 
           $kategori = "kategori", 
           $kemasan = "kemassan", 
           $segmentasi = "segmentasi", 
           $fabrikasi = "fabrikasi", 
           $harga = "harga";
    
    public function __construct($nama_obat, $kategori, $kemasan, $segmentasi, $fabrikasi, $harga) {
        $this->nama_obat = $nama_obat;
        $this->kategori = $kategori;
        $this->kemasan = $kemasan;
        $this->segmentasi = $segmentasi;
        $this->fabrikasi = $fabrikasi;
        $this->harga = $harga;
    }

    public function getObat() {
        return "$this->nama_obat, $this->kategori,$this->kemasan,$this->segmentasi,$this->fabrikasi,$this->harga";
    }
}

class cetakObat {
    public function cetak(Obat $obt) {
        $str = "$obt->nama_obat | $obt->kategori | $obt->kemasan | $obt->segmentasi | $obt->fabrikasi | $obt->harga";
        return $str;
    }
}

$obt1 = new Obat("Bodrex","Obat Sakit Kepala", "1 Strip isi 4 Tablet","Biru","Tempo Scan","2350");
$obt2 = new Obat("Laserin","Obat Batuk dan Pilek", "1 Botol 100ml","Hijau","Mecosin","13500");
$obt3 = new Obat("Gentamicyn","Salep Antibiotik", "1 Tube 5gr","Merah","Kimia Farma","4200");
$obt4 = new Obat("Demacolin","Obat Batuk dan Pilek", "1 Strip isi 10 Tablet","Biru","Coronet Crown","5200");
$obt5 = new Obat("Imboost Force","Suplemen", "1 Strip isi 10 Tablet","Hijau","Soho","27500");

echo "<h3>Method</h3>";
echo $obt1->getObat();
echo "<br/>";
echo $obt2->getObat();
echo "<br/>";
echo $obt3->getObat();
echo "<br/>";
echo $obt4->getObat();
echo "<br/>";
echo $obt5->getObat();
echo "<hr/>";

echo "<h3>Object_Type</h3>";
$obt = new cetakObat();
echo $obt->cetak($obt1);
echo "<br/>";
echo $obt->cetak($obt2);
echo "<br/>";
echo $obt->cetak($obt3);
echo "<br/>";
echo $obt->cetak($obt4);
echo "<br/>";
echo $obt->cetak($obt5);

?>