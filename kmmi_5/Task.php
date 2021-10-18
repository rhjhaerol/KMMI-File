<?php

function n_factorial($n){

    $result = empty($n) ? 0 : 1;

    while ($n) {
        $result *= $n;
        $n--;
    }

    return $result;
}

function print_multiplying_table($m, $n)
{
    
    $result = '<table class="math_table"><tr><th>X</th>';

    for ($i=1; $i <= $n; $i++) { 
        $result .= "<th>$i</th>";
    }

    $result .= '</tr>';

    for ($i=1; $i <= $m; $i++) { 

        $result .= "<tr><th>$i</th>";

        for ($j=1; $j <= $n; $j++) { 

            $res = ($i*$j);

            $result .= "<td>$res</td>";
        }
        $result .= '</tr>';
    }

    $result .= '</table>';

    return $result;
}

function summarize_data($datas)
{
    $result = array(
        'sum' => 0,
        'average' => 0
    );

    foreach ($datas as $key => $value) {
        $result['sum'] += $value;
    }

    $result['average'] = $result['sum']/count($datas);

    return $result;
}


?>