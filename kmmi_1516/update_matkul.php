<?php

// koneksi dengan database
$conn = mysqli_connect("localhost","root","","universitas");
$kode_matkul = $_GET["kode_matkul"];

$query="SELECT * from matkul where kode_matkul = '$kode_matkul'";
$result = mysqli_query($conn, $query);
$matkul=mysqli_fetch_assoc($result);

if (isset($_POST["submit"])) {
    $kode_matkul = $_POST["kode_matkul"];
    $nama_matkul = $_POST["nama_matkul"];
    $jml_sks = $_POST["jml_sks"];
    $kode_jurusan = $_POST["kode_jurusan"];

$query="UPDATE matkul SET 
            kode_matkul='$kode_matkul',
            nama_matkul='$nama_matkul',
            jml_sks='$jml_sks',
            kode_jurusan='$kode_jurusan'
            WHERE kode_matkul='$kode_matkul' ";
mysqli_query($conn, $query);
if (mysqli_affected_rows($conn)>0) {
    echo "<script>
            alert('Data berhasil disimpan!');
            document.location.href='matkul.php';
        </script>";
} else {
    echo "<script>
        alert('Data gagal disimpan!');
        document.location.href='matkul.php';
    </script>";
    echo mysqli_error(($conn));
}
}
// var_dump(mysqli_affected_rows($conn));


?>

<!doctype html>
<html lang="en">
  <head>
    <title>Tambah Mata Kuliah</title>
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
            <h4 class="modal-title">Tambah Mata Kuliah</h4>
            <!-- <p style="color: red;"><i></i></p> -->
            <hr>
            <div class="form-group mb-4">
                <label for="" class="control-label">Kode Matkul</label>
                <input class="form-control font-weight-medium" placeholder="Masukan Kode Matkul" name="kode_matkul" type="text" id="kode_matkul" value="<?= $matkul["kode_matkul"];?>">
            </div>
            <div class="form-group mb-4">
                <label for="" class="control-label">Nama Matkul</label>
                <input class="form-control font-weight-medium" placeholder="Masukan Nama Matkul" name="nama_matkul" type="text" id="nama_matkul" value="<?= $matkul["nama_matkul"];?>">
            </div>
            <div class="form-group mb-4">
                <label for="" class="control-label">Jumlah SKS</label>
                <input class="form-control font-weight-medium" placeholder="Masukan Jumlah SKS" name="jml_sks" type="text" id="jml_sks" value="<?= $matkul["jml_sks"];?>">
            </div>
            <div class="form-group mb-4">
                <label for="" class="control-label">Kode Jurusan</label>
                <select class="form-control font-weight-medium" placeholder="Masukan Kode Jurusan" name="kode_jurusan" id="kode_jurusan" value="<?= $matkul["kode_jurusan"];?>">
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