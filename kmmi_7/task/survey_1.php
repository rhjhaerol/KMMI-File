<?php

require_once('Core.php');

if (isset($_GET['submit'])) {

    $is_valid = survey_data_validation($_GET);

    if ($is_valid) {

        $survey1_data = json_encode($_GET);

        setcookie('survey_1', $survey1_data, time() + 3600, '/');

        header('Location: survey_2.php');
        
    }
}

$survey_question = array(
    array(
        'type' => 'text',
        'name' => 'name',
        'label' => 'Nama'
    ),
    array(
        'type' => 'email',
        'name' => 'email',
        'label' => 'Email'
    ),
    array(
        'type' => 'password',
        'name' => 'password',
        'label' => 'Password'
    ),
);

?>

<!doctype html>
<html lang="en">

<head>
    <title>KMMI 2021 Web Design - Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body {
            height: 100vh;
            margin: 20px;
        }

        .main-content {
            margin-top: auto;
            margin-bottom: auto;
            margin: auto;
        }

        .main-content form {
            border: 1px solid grey;
            padding: 20px;
            border-radius: 3px;
            background-color: #FFF5DA;
            border-color: #F7D59C;
        }
    </style>
</head>

<body>
    <div class="" style="display: flex; flex-direction: column;height: 100%;">

        <div class="col-6 main-content">

            <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="GET">
                <h4 style="margin-bottom: 0px;">KMMI - Online Survey</h4>
                <span style="display: inline-block; border-top: 2px solid red; width: 100px; margin: -10px 0 0 8px;"></span>

                <?php
                foreach ($survey_question as $key => $value) {
                    echo render_bs_form($value);
                }
                ?>

                <div class="row" style="margin-top:18px; text-align: right;">
                    <div class="">
                        <button type="submit" class="btn btn-primary" name="submit" value="1">Next</button>
                    </div>
                </div>
            </form>

        </div>

    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>