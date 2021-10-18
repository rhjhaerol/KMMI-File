<?php

class Mahasiswa {
    private $data=[];
    
    public function __get($na) {
        $uts=$this->data[$na='UTS'];
        $uas=$this->data[$na='UAS'];
        $na=(0.4 * $uts) + (0.6 * $uas);
        return $na;
    }

    public function __set($atribut, $nilai) {
        if (!is_numeric($nilai)) {
            throw new Exception("Nilai yang dimasukan harus numerik!");
        }
        echo $atribut.' = '.$nilai;
        $this->data[$atribut] = $nilai;
    }
}

$obj1 = new Mahasiswa;
$obj1->uts=100;
echo "<br/>";
$obj1->uas=95;
echo "<br/>";
echo "Nilai Akhir = ". $obj1->na;
?>