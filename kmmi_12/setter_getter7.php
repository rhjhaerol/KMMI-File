<?php

class Mahasiswa {
    private $data=[];
    
    public function __set($atribut, $nilai) {
        if (!is_numeric($nilai)) {
            throw new Exception("Nilai yang dimasukan harus numerik!");
        }
        echo $atribut.' = '.$nilai;
        echo "<br/>";
        $this->data[$atribut] = $nilai;
    }
}

$obj1 = new Mahasiswa;
$obj1->uts=90;
$obj1->uts="abc";
$obj1->uts=50;

?>