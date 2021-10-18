<?php

require_once('Core.php');

if (isset($_POST['submit'])) {

    $result = validate_data($_POST['submit']);

    if($result){
        $error_message = 'not Complete the survey';
    }else{
        header('Location: summary.php');
    }
}

$survey_form = array(
    array(
        'type' => 'text',
        'name' => 'nama',
        'label' => 'Full Name',
        'placeholder' => 'Full Name',
        'ket' => 'Masukkan nama asli Anda'
    ),
    array(
        'type' => 'text',
        'name' => 'username',
        'label' => 'Username',
        'placeholder' => 'Username',
        'ket' => 'Username akan digunakan sebagai identitas profile Anda'
    ),
    array(
        'type' => 'email',
        'name' => 'email',
        'label' => 'Email',
        'placeholder' => 'Alamat Email',
        'ket' => 'Gunakan alamat email aktif Anda'
    ),
    array(
        'type' => 'date',
        'name' => 'birthdate',
        'label' => 'Tanggal Lahir',
        'ket' => 'Masukan tanggal lahir'
    ),
    array(
        'type' => 'radio',
        'name' => 'gender',
        'label' => 'Gender',
        'data' => [
            [
                'label' => 'Male',
                'value' => 'male'
            ],[
                'label' => 'Female',
                'value' => 'male'
            ]
        ],    
    ),
    array(
        'type' => 'textarea',
        'name' => 'feedback',
        'label' => 'Feedback',
        'placeholder' => 'Text area',
        'ket' => 'Kirim masukan'
    )
);
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Survey Online</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <div class="mx-auto p-5" style="width: 1000px;">
        <form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" style="padding:10px; border: 1px solid grey; border-radius: 1px;">
        <h4 class="modal-title">Survey Online</h4>
        <hr>

        <?php
        
        foreach ($survey_form as $key => $value) {
            echo render_form($value);
        }

        ?>

        <div class="form-group pt-2 pb-2">
            <button type="button" class="dcd-btn btn-primary px-4 btn-md" name="submit">
                Submit
            </button>
        </div>
        </form>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>

