<?php

//Task 1
function faktorial($n){
    if($n==1){
        return $n;
    }else{
        return $n * faktorial($n-1);
    }
}

$nilai = 2;

echo "hasil faktorial dari " . $nilai . "! = ". faktorial($nilai);

echo "<hr></hr>";

//Task 2

function tabel_perkalian($m, $n){
    // $m++;
    // $n++;
    echo "<table border = 1>";
    echo "<tr>";
    echo "<th></th>";
    for ($i=1; $i <= $m ; $i++) {    
    echo "
            <th>$i</th>
    ";
    }
    echo "/<tr>";
    for ($i=1 ; $i < $m ; $i++) { 
        echo "<tr>";
        echo "<th>$i</th>"; 
            for ($j=1; $j <= $n ; $j++) {
            // if ($i == $j) {
            //     $hasil = $i * $j;
            //     echo "<td>$hasil</td>";
            // } else {
            //     $hasil = $i * $j;
            //     echo "<td>$hasil</td>";
            // }
            $hasil = $i * $j;
                echo "<td>$hasil</td>";
        }
        echo "<tr>";
    }
   echo "</table>";

}

echo tabel_perkalian(10,10);

?>