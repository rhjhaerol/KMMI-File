<?php

// koneksi dengan database
$conn = mysqli_connect("localhost","root","","universitas");
$kode_matkul=$_GET["kode_matkul"];
$query = "DELETE from matkul where kode_matkul='$kode_matkul'";
$result = mysqli_query($conn,$query);

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
// var_dump(mysqli_affected_rows($conn));

?>