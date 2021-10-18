<?php

declare(strict_types=1);

date_default_timezone_set('Asia/Jakarta');

/**
 * Fungsi untuk mencetak welcome message
 *
 * @param string $course
 * @param string $name
 * @return void
 */
function print_welcome(string $course, string $name = 'participants')
{

    $waktu = '';

    $jam_sekarang = intval(date('H'));

    if ($jam_sekarang < 10) {
        $waktu = 'pagi';
    } else if ($jam_sekarang >= 10 && $jam_sekarang <= 14) {
        $waktu = 'siang';
    } else if ($jam_sekarang > 14 && $jam_sekarang <= 18) {
        $waktu = 'sore';
    } else {
        $waktu = 'malam';
    }

    echo "<p>Selamat $waktu, Welcome to $course short-course, $name...</p>";
}

/**
 * Fungsi untuk menghitung umur
 *
 * @param string $tanggal_lahir
 * @return int
 */
function cek_umur(string $tanggal_lahir): int
{
    $unixtime_tanggallahir = strtotime($tanggal_lahir);
    $unixtime_sekarang = time();

    $unixtime_diff = $unixtime_sekarang - $unixtime_tanggallahir;
    $year_diff = $unixtime_diff / 3.154e+7;

    return intval($year_diff);
}

function counter_step(int &$x, int $y)
{

    $x += $y;

    return $x;
}

function print_row(int &$x)
{

    for ($i = 0; $i < 5; $i++) {

        $x++;

        $ran = rand(1, 100);

        echo "
            <tr>
                <td>" . ($x) . "</td>
                <td>$ran</td>
            </tr>
        ";
    }
    
}
