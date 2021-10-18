<?php

class Produk {
    public $jenis, 
           $nama, 
           $satuan, 
           $hargasatuan;

    public function penjualan() {
        return "Produk paling laris";
    }
}
class Logistik extends Produk {
    public $stok;

    public function lihatStok() {
        $str="$this->stok, karena ini adalah {$this->penjualan()}";
        return $str;
    }
}

$produk1 = new Logistik();
$produk1->stok='Stok Habis';
echo $produk1->lihatStok();

?>