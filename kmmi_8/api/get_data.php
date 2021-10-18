<?php

$filter = isset($_POST['search']) ? strtolower($_POST['search']) : '';

$data_set = [
    ['Surabaya', 6],
    ['Tangerang', 8],
    ['Semarang', 5],
    ['Gresik', 7],
    ['Demak', 8],
    ['Jakarta', 11],
    ['Bandung', 9],
    ['Bogor', 8],
    ['Bekasi', 7],
    ['Jayapura', 3]
];

if (!empty($filter)) {

    $data = [];

    foreach ($data_set as $key => $value) {
        $current_data = strtolower($value[0]);

        if (strpos($current_data, $filter) !== false) {
            $data[] = $value;
        }
    }
} else {
    $data = $data_set;
}

$result = array(
    'data' => $data,
    'total' => count($data_set)
);

echo json_encode($result);
