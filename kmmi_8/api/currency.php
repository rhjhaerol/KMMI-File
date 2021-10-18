<?php

$input_value = isset($_POST['value'])?$_POST['value']:0;

$result = array(
    'result' => intval($input_value)/15000
);

echo json_encode($result);