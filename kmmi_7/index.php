<?php

require_once('Base.php');

$error_message = [];
$upload_status = '';

if (isset($_POST['upload'])) {

    $upload_status = 'Failed to upload your file.';

    // $validate_file = validate_file_upload('profile_photo');
    $validate_file = validate_pdf_upload('profile_cv');

    if ($validate_file['success']) {
        $result = move_uploaded_file($validate_file['tmp'], $validate_file['target']);

        if ($result) {
            $upload_status = 'File successfully uploaded.';
        }
    }else{
        $error_message = $validate_file['message'];
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>KMMI Web Design - Course 7</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="col-5" style="margin: auto;">
        <div class="container">
            <h2>PHP File Upload</h2>
            <div class="container">
                <div class="card border-<?= empty($error_message) ? 'info' : 'danger' ?>" style="display: <?= isset($_POST['upload']) ? 'block' : 'none' ?>;">
                    <div class="card-body">
                        <h4 class="card-title"><?= empty($error_message) ? 'Success' : 'Error' ?></h4>
                        <p class="card-text">
                        <ul style="display:<?= empty($error_message) ? 'none' : 'block' ?>;">
                            <?php
                            foreach ($error_message as $key => $value) {
                                echo "<li>$value</li>";
                            }
                            ?>
                        </ul>
                        <span style="font-weight: 600;">
                            <?= $upload_status ?>
                        </span>
                        </p>
                    </div>
                </div>
                <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-3 row">
                        <label for="profile_photo" class="col-sm-12 col-form-label">Photo</label>
                        <div class="col-sm-12">
                            <input type="file" class="form-control" name="profile_photo" id="profile_photo" placeholder="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="profile_cv" class="col-sm-12 col-form-label">Personal CV</label>
                        <div class="col-sm-12">
                            <input type="file" class="form-control" name="profile_cv" id="profile_cv" placeholder="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="" style="text-align: right;">
                            <button type="submit" class="btn btn-primary" name="upload" value="1">Upload</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>