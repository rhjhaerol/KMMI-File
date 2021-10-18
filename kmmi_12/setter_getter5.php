<?php

class Mahasiswa {
    private $nama="Ali",
            $alamat="Dukuh Kupang";
    
    public function __get($atribut) {
        if ($atribut === 'username1') {
            return $this->alamat;
        } else {
            return "Property does not exist";
        }
    }
}

$obj1 = new Mahasiswa;
echo $obj1->username1;

?>