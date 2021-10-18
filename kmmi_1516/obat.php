<?php

// koneksi dengan database
$conn = mysqli_connect("localhost","root","","obat");

//cek koneksi database
// if (!$conn) {
//     echo "<script>
//     alert('Koneksi database gagal!');
//     </script>";
// } else {
//     echo "<script>
//     alert('Koneksi database berhasil');
//     </script>";
// }

$query = "SELECT * FROM obat";
$result = mysqli_query($conn, $query);
mysqli_error($conn);

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Apotek</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <div class="col-8" style="margin:auto;">
    <a href="add_obat.php">Add Obat</a>
    <div style="text-align:center;">
        <h2>Data Apotek</h2>
    </div>
    <table class="table table-bordered table-inverse table-responsive">
        <thead class="thead-default">
            <tr style="background-color:cyan;">
                <th>NO</th>
                <th>NAMA OBAT</th>
                <th>KATEGORI</th>
                <th>KEMASAN</th>
                <th>SEGMENTASI</th>
                <th>FABRIKASI</th>
                <th>HARGA</th>
                <th>ACTION</th>
            </tr>
            </thead>
            <?php while($obt=mysqli_fetch_assoc($result)) : ?>
            <tbody>
                <tr>
                    <td><?=$obt["id"];?></td>
                    <td><?= $obt["nama_obat"]; ?></td>
                    <td><?= $obt["kategori"]; ?></td>
                    <td><?= $obt["kemasan"]; ?></td>
                    <td><?= $obt["segmentasi"]; ?></td>
                    <td><?= $obt["fabrikasi"]; ?></td>
                    <td><?= $obt["harga"]; ?></td>
                    <td><a href="update_obat.php?id=<?= $obt["id"];?>">Ubah</a> | <a href="delete_obat.php?id=<?=$obt["id"];?>"onclick="return confirm('Apakah Anda yakin ?');">Hapus</a></td>
                </tr>
            </tbody><?php endwhile; ?>
    </table>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>