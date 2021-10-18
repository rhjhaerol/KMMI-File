<?php

require_once('core.php');

$name = 'Ajii';
$course = 'Web Design';

$welcome = print_welcome($course, $name);

// Returning value

$tanggal_lahir = '13-03-2000';

$umur = cek_umur($tanggal_lahir);

echo "<p>Umur Anda sekarang $umur tahun.</p>";

// Passing arguments by reference

$numb = 3;
$step = rand(1, 9);

$result = counter_step($numb, $step);

echo "($numb, $step) = " . $result;

$baris = 0;

?>

<table border=1>
    <?= print_row($baris); ?>
    <?= print_row($baris); ?>
    <?= print_row($baris); ?>
    <?= print_row($baris); ?>
</table>