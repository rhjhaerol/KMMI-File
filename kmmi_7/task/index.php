<?php

require_once('Core.php');

?>

<!doctype html>
<html lang="en">

<head>
    <title>KMMI 2021 Web Design - Course 6</title>
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
            text-align: center;
        }

        .main-content div {
            display: inline-block;
            padding: 10px 30px;
            border-style: solid;
            border-width: 1px;
            margin: 10px 0;
            min-width: 210px;
        }

        .main-content .left-card {
            background-color: #F0D9FF;
            border-color: #BFA2DB;
        }

        .main-content .right-card {
            background-color: #FFF5DA;
            border-color: #F7D59C;
        }

        .main-content a{
            text-decoration: none;
            color: #555555;
        }
    </style>
</head>

<body>
    <div class="" style="display: flex; flex-direction: column;height: 100%;">
        <div class="main-content">

            <h3 style="font-family: sans-serif;">Web Design - Course 6</h3>

            <a href="login.php"><div class="left-card">LOGIN</div></a>
            <a href="survey_1.php"><div class="right-card">SURVEY</div></a>

        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>