<?php

class Mahasiswa {
    private $data=[];
    
    public function __set($atribut, $nilai) {
        echo $atribut.' = '.$nilai;
        echo "<br/>";
        $this->data[$atribut] = $nilai;
    }
}

$obj1 = new Mahasiswa;
$obj1->uts=90;
$obj1->uts=100;
$obj1->uts=50;

?>