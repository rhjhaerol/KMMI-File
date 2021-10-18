<?php

require_once('core.php');

$error_message = '';

if (isset($_POST['login'])) {

    $result = validate_login($_POST['username'], $_POST['password']);

    if(!$result){
        $error_message = 'Authentication failed, please try again!';
    }else{
        header('Location: survey.php');
    }

}

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
            background-color: #F0D9FF;
            border-color: #BFA2DB;
        }
    </style>
</head>

<body>
    <div class="" style="display: flex; flex-direction: column;height: 100%;">

        <div class="col-3 main-content">

            <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                <h4 style="margin-bottom: 0px;">Please Login</h4>
                <span style="display: inline-block; border-top: 2px solid red; width: 100px; margin: -10px 0 0 8px;"></span>
                
                <p style="color: red;"><i><?=$error_message?></i></p>
                
                <div class="row">
                    <label for="username" class="col-form-label">Username*</label>
                    <div class="">
                        <input type="text" class="form-control" name="username" id="username" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <label for="password" class=" col-form-label">Password*</label>
                    <div class="">
                        <input type="password" class="form-control" name="password" id="password" placeholder="">
                    </div>
                </div>

                <div class="row" style="margin-top:18px; text-align: right;">
                    <div class="">
                        <button type="submit" class="btn btn-primary" name="login">Login</button>
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