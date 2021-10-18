<?php

// koneksi dengan database
$conn = mysqli_connect("localhost","root","","obat");
$id=$_GET["id"];
$query = "DELETE from obat where id='$id'";
$result = mysqli_query($conn,$query);

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
// var_dump(mysqli_affected_rows($conn));

?>