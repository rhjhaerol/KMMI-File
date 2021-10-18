<?php

// koneksi dengan database
$conn = mysqli_connect("localhost","root","","universitas");

if (isset($_POST["submit"])) {
    $nrp = $_POST["nrp"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $kota = $_POST["kota"];
    $no_telp = $_POST["no_telp"];
    $jkelamin = $_POST["jkelamin"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $email = $_POST["email"];
    $kode_jurusan = $_POST["kode_jurusan"];

$query="INSERT INTO mahasiswa VALUES ('$nrp','$nama','$alamat','$kota','$no_telp','$jkelamin','$tgl_lahir','$email', '$kode_jurusan')";

mysqli_query($conn, $query);
if (mysqli_affected_rows($conn)>0) {
    echo "<script>
            alert('Data berhasil disimpan!');
            document.location.href='mahasiswa1.php';
        </script>";
} else {
    echo "<script>
        alert('Data gagal disimpan!');
        document.location.href='mahasiswa1.php';
    </script>";
    echo mysqli_error(($conn));
}
}
// var_dump(mysqli_affected_rows($conn));


?>

<!doctype html>
<html lang="en">
  <head>
    <title>Tambah Mahasiswa</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
        <div class="mx-auto p-5" style="width: 600px;">
            <form method="POST" action=" " style="padding:10px; border: 1px solid grey; border-radius: 1px;">
            <h4 class="modal-title">Tambah Mahasiswa</h4>
            <!-- <p style="color: red;"><i></i></p> -->
            <hr>
            <div class="form-group mb-4">
                <label for="" class="control-label">NRP</label>
                <input class="form-control font-weight-medium" placeholder="Masukan NRP" name="nrp" type="text" id="nrp">
            </div>
            <div class="form-group mb-4">
                <label for="" class="control-label">Nama</label>
                <input class="form-control font-weight-medium" placeholder="Masukan Nama" name="nama" type="text" id="nama">
            </div>
            <div class="form-group mb-4">
                <label for="" class="control-label">Alamat</label>
                <input class="form-control font-weight-medium" placeholder="Masukan Alamat" name="alamat" type="text" id="alamat">
            </div>
            <div class="form-group mb-4">
                <label for="" class="control-label">Kota</label>
                <input class="form-control font-weight-medium" placeholder="Masukan Kota" name="kota" type="text" id="kota">
            </div>
            <div class="form-group mb-4">
                <label for="" class="control-label">No Telpon</label>
                <input class="form-control font-weight-medium" placeholder="Masukan No Telpon" name="no_telp" type="text" id="no_telp">
            </div>
            <div class="form-group mb-4">
                <label for="" class="control-label">Jenis Kelamin</label>
                <input class="form-control font-weight-medium" placeholder="Masukan Jenis Kelamin" name="jkelamin" type="text" id="jkelamin">
            </div>
            <div class="form-group mb-4">
                <label for="" class="control-label">Tanggal Lahir</label>
                <input class="form-control font-weight-medium" placeholder="Masukan Tanggal Lahir" name="tgl_lahir" type="date" id="tgl_lahir">
            </div>
            <div class="form-group mb-4">
                <label for="" class="control-label">Email</label>
                <input class="form-control font-weight-medium" placeholder="Masukan Email" name="email" type="email" id="email">
            </div>
            <div class="form-group mb-4">
                <label for="" class="control-label">Kode Jurusan</label>
                <select class="form-control font-weight-medium" placeholder="Masukan Kode Jurusan" name="kode_jurusan" id="kode_jurusan">
                    <option value="J01">J01</option>
                    <option value="J02">J02</option>
                </select>
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