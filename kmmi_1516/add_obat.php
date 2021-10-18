<?php

// koneksi dengan database
$conn = mysqli_connect("localhost","root","","obat");

if (isset($_POST["submit"])) {
    $id = $_POST["id"];
    $nama_obat = $_POST["nama_obat"];
    $kategori = $_POST["kategori"];
    $kemasan = $_POST["kemasan"];
    $segmentasi = $_POST["segmentasi"];
    $fabrikasi = $_POST["fabrikasi"];
    $harga = $_POST["harga"];

$query="INSERT INTO obat VALUES ('$id','$nama_obat','$kategori','$kemasan','$segmentasi','$fabrikasi','$harga')";
mysqli_query($conn, $query);
if (mysqli_affected_rows($conn)>0) {
    echo "<script>
            alert('Data berhasil disimpan!');
            document.location.href='obat.php';
        </script>";
} else {
    echo "<script>
        alert('Data gagal disimpan!');
        document.location.href='obat.php';
    </script>";
    echo mysqli_error(($conn));
}
}
// var_dump(mysqli_affected_rows($conn));

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
    <div class="mx-auto p-5" style="width: 1000px;">
            <form method="POST" action=" " style="padding:10px; border: 1px solid grey; border-radius: 1px;">
            <h4 class="modal-title">Tambah Obat</h4>
            <!-- <p style="color: red;"><i></i></p> -->
            <hr>
            <div class="form-group mb-4">
                <label for="" class="control-label">ID</label>
                <input class="form-control font-weight-medium" placeholder="Masukan ID" name="id" type="text" id="id">
            </div>
            <div class="form-group mb-4">
                <label for="" class="control-label">Nama Obat</label>
                <input class="form-control font-weight-medium" placeholder="Masukan Nama Obat" name="nama_obat" type="text" id="nama_obat">
            </div>
            <div class="form-group mb-4">
                <label for="" class="control-label">Kategori</label>
                <input class="form-control font-weight-medium" placeholder="Masukan Kategori" name="kategori" type="text" id="kategori">
            </div>
            <div class="form-group mb-4">
                <label for="" class="control-label">Kemasan</label>
                <input class="form-control font-weight-medium" placeholder="Masukan Kemasan" name="kemasan" type="text" id="kemasan">
            </div>
            <div class="form-group mb-4">
                <label for="" class="control-label">Segmentasi</label>
                <input class="form-control font-weight-medium" placeholder="Masukan Segmentasi" name="segmentasi" type="text" id="segmentasi">
            </div>
            <div class="form-group mb-4">
                <label for="" class="control-label">Fabrikasi</label>
                <input class="form-control font-weight-medium" placeholder="Masukan Fabrikasi" name="fabrikasi" type="text" id="fabrikasi">
            </div>
            <div class="form-group mb-4">
                <label for="" class="control-label">Harga</label>
                <input class="form-control font-weight-medium" placeholder="Masukan Harga" name="harga" type="number" id="harga">
            </div>
            <div class="form-group mb-2">
                <button type="submit" class="dcd-btn btn-primary px-4 btn-md " name="submit">Submit</button>
            </div>
            </form>
        </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>