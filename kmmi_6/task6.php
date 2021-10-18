<?php

require_once('core.php');

if (isset($_POST["enroll"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    login($username, $password);
    exit;
}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Desain and Build Web-Task 6</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <div class="col-8" style="margin: auto">
        <div class="content-section-heading mb-3">
            <h2 class="text-secondary mb-0">Task #1</h2>
            <h6>Form Login</h6>
        </div>
        <form class="form-inline" action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
            <div class="mb-3 row">
                <label class="col-sm-12" for="username">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="mb-3 row">
                <label class="col-sm-12" for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="col-md-4">
            <button type="submit" class="btn btn-primary" name="enroll" value="1">Login</button>
            </div>
            
        </form>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>