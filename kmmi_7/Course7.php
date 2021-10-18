<?php

require_once('Base.php');

$error_message = [];
$upload_status = '';

if (isset($_POST['upload'])) {
    
    $upload_status = 'Failed to upload your file.';

    $validate_image = validate_image_upload('profil_photo');

    if ($validate_image['success']) {
        $result = move_upload_file($validate_image['tmp'], $validate_image['target']);

        if ($result) {
            $upload_status = 'File successfully uploaded';
        }
    }else {
        $error_message = $validate_image['message']
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>KMMI Build and Design Web-Course 7</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    
    <div class="col-5 pt-3" style="margin:auto;">
        <div class="container">
            <h2>PHP File Upload </h2>
            <div class="container">
                <form action="<?=?>" method="POST">

                </form>
            </div>
        </div>
    </div>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>