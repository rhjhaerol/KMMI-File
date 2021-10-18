<?php

class Mahasiswa {
    private $nama="Ali",
            $alamat="Dukuh Kupang";
    
    public function __get($atribut) {
        return $this->nama;
    }
}

$obj1 = new Mahasiswa;
echo $obj1->usermane1;

?>