<?php
date_default_timezone_set('Asia/Jakarta');

$data = array(
    'time' => time(),
    'formatted' => date('Y-m-d H:i:s')
);

echo json_encode($data);
exit;