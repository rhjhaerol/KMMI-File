<?php

$start = isset($_GET['start']) ? $_GET['start'] : 0;
$end = isset($_GET['end']) ? $_GET['end'] : 10;
$type = isset($_GET['number_type']) ? $_GET['number_type'] : '';

switch ($type) {
    case 'odd':

        for ($i = $start; $i < $end; $i++) {
            if ($i % 2 !== 0) {
                echo $i . '<br/>';
            }
        }

        break;

    case 'even':

        for ($i = $start; $i < $end; $i++) {
            if ($i % 2 == 0) {
                echo $i . '<br/>';
            }
        }

        break;

    default:
        for ($i = $start; $i < $end; $i++) {
            echo $i . '<br/>';
        }
        break;
}
