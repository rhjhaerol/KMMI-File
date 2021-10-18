<?php

// koneksi dengan database
$conn = mysqli_connect("localhost","root","","universitas");

// cek koneksi database
// if (!$conn) {
//     echo "<script>
//     alert('Koneksi database gagal!');
//     </script>";
// } else {
//     echo "<script>
//     alert('Koneksi database berhasil');
//     </script>";
// }

$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($conn, $query);

// // var_dump($result);
// if (!$result) {
//     echo mysqli_error($conn);
// } else {
//     while ($mhs = mysqli_fetch_row($result)) {
//         var_dump($mhs);
//     }
// }

// $result1 = mysqli_query($conn,"SELECT * FROM mahasiswa");
// while ($mhs1=mysqli_fetch_row($result1)) {
//     echo "$mhs1[1]" . " | ";
// }

// echo "<br>";
// $result2 = mysqli_query($conn,"SELECT * FROM mahasiswa");
// while ($mhs2=mysqli_fetch_assoc($result2)) {
//     echo "$mhs2[alamat]" . " | ";
// }

// echo "<br>";
// $result3 = mysqli_query($conn,"SELECT * FROM mahasiswa");
// while ($mhs3=mysqli_fetch_array($result3)) {
//     echo "$mhs3[email]" . " | ";
// }

// echo "<br>";
// $result4 = mysqli_query($conn,"SELECT * FROM mahasiswa");
// while ($mhs4=mysqli_fetch_object($result4)) {
//     echo "$mhs4->tgl_lahir" . " | ";
// }

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Universitas</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <div class="col-8" style="margin:auto;">
    <div style="text-align:center;">
        <h2>Data Mahasiswa</h2>
    </div>
    <table class="table table-bordered table-inverse table-responsive">
        <thead class="thead-default">
            <tr style="background-color:cyan;">
                <th>No</th>
                <th>NRP</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>KOTA</th>
                <th>TELP</th>
                <th>JKELAMIN</th>
                <th>TGL LAHIR</th>
                <th>EMAIL</th>
                <th>KODE JURUSAN</th>
            </tr>
            </thead>
            <?php $counter = 1; ?>
            <?php while($mhs=mysqli_fetch_assoc($result)) : ?>
            <tbody>
                <tr>
                    <td><?=$counter?></td>
                    <td><?= $mhs["nrp"]; ?></td>
                    <td><?= $mhs["nama"]; ?></td>
                    <td><?= $mhs["alamat"]; ?></td>
                    <td><?= $mhs["kota"]; ?></td>
                    <td><?= $mhs["no_telp"]; ?></td>
                    <td><?= $mhs["jkelamin"]; ?></td>
                    <td><?= $mhs["tgl_lahir"]; ?></td>
                    <td><?= $mhs["email"]; ?></td>
                    <td><?= $mhs["kode_jurusan"]; ?></td>
                </tr>
            </tbody><?php $counter++; ?><?php endwhile; ?>
    </table>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>