<?php

class Apotek {
    private $data=[];

    public function __get($tH) {
        if (!is_numeric($this->data[$tH='harga'])) {
            throw new Exception("Nilai yang dimasukan harus numerik!");
        }
        if (!is_numeric($this->data[$tH='diskon'])) {
            throw new Exception("Nilai yang dimasukan harus numerik!");
        }
        // $nama_obat=$this->data[$tH='obat'];
        // $kategori=$this->data[$tH='kategori'];
        // $kemasan=$this->data[$tH='kemasan'];
        // $segemntasi=$this->data[$tH='segmentasi'];
        // $fabrikasi=$this->data[$tH='fabrikasi'];
        $harga=$this->data[$tH='harga'];  
        $diskon=$this->data[$tH='diskon'];  
        $tH=$harga*(100-$diskon)/100;
        return $tH;
    }
    
    public function __set($atribut, $nilai) {
        echo $nilai. " | ";
        $this->data[$atribut] = $nilai;
        // echo "<br/>";
    }
    
}

$obt1 = new Apotek;
$obt1->nama="Bodrex";
$obt1->kategori="Obat Sakit Kepala";
$obt1->kemasan="1 Strip isi 4 Tablet";
$obt1->segmentasi="Biru";
$obt1->fabrikasi="Tempo Scan";
$obt1->harga=8500;
$obt1->diskon=0;
echo $obt1->tH;
echo "<br/>";
$obt1->nama="Laserin";
$obt1->kategori="Obat Sakit Kepala";
$obt1->kemasan="1 Botol 100ml";
$obt1->segmentasi="Hijau";
$obt1->fabrikasi="Mecosin";
$obt1->harga=17500;
$obt1->diskon=5;
echo $obt1->tH;
echo "<br/>";
$obt1->nama="Bodrex";
$obt1->kategori="Obat Sakit Kepala";
$obt1->kemasan="1 Strip isi 4 Tablet";
$obt1->segmentasi="Biru";
$obt1->fabrikasi="Tempo Scan";
$obt1->harga=48500;
$obt1->diskon=10;
echo $obt1->tH;

?>