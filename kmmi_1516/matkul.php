<?php

// koneksi dengan database
$conn = mysqli_connect("localhost","root","","universitas");

//cek koneksi database

$query = "SELECT *
        FROM matkul a, jurusan b
        WHERE a.kode_jurusan = b.kode_jurusan";
$result = mysqli_query($conn, $query);

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
  <a href="tambah_matkul.php">Tambah data matkul</a>
    <div class="col-8" style="margin:auto;">
    <div style="text-align:center;">
        <h2>Data Mata Kuliah</h2>
    </div>
    <table class="table table-bordered table-inverse table-responsive">
        <thead class="thead-default">
            <tr style="background-color:cyan;">
                <th>NO</th>
                <th>KODE MATKUL</th>
                <th>NAMA MATKUL</th>
                <th>JUMLAH SKS</th>
                <th>NAMA JURUSAN</th>
                <th>ACTION</th>
            </tr>
            </thead>
            <?php $counter = 1; ?>
            <?php while($mhs=mysqli_fetch_assoc($result)) : ?>
            <tbody>
                <tr>
                    <td><?=$counter++?></td>
                    <td><?= $mhs["kode_matkul"]; ?></td>
                    <td><?= $mhs["nama_matkul"]; ?></td>
                    <td><?= $mhs["jml_sks"]; ?></td>
                    <td><?= $mhs["nama_jurusan"]; ?></td>
                    <td><a href="update_matkul.php?kode_matkul=<?= $mhs["kode_matkul"];?>">Ubah</a> | <a href="hapus_matkul.php?kode_matkul=<?=$mhs["kode_matkul"];?>"onclick="return confirm('Apakah Anda yakin ?');">Hapus</a></td>
                </tr>
            </tbody><?php endwhile; ?>
    </table>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>