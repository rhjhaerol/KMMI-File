<?php

require_once('Task.php');

?>

<!doctype html>
<html lang="en">
  <head>
    <title>KMMI Desain and Build Web-Task 5</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .math_table {
            border: 1px solid #DDD;
        }

        .math_table th {
            background: #FAFAFA;
            border: 1px solid #DDD;
            padding: 2px 6px;
            text-align: center;
        }

        .math_table td {
            border: 1px solid #DDD;
            text-align: right;
            padding: 2px 6px;
        }
    </style>
  </head>

  <body>

    <div class="col-8" style="margin: auto;">
        <h2>Task #1</h2>
        <h6>Calculate n-Factorial</h6>
        <?php
        
        $n =4;

        $result = n_factorial($n);

        echo "<p>$n! = $result</p>";
        
        ?>
        <hr/>

        <h2>Task #2</h2>
        <h6>Multiplying Table</h6>
        <?php

        $m = 10;
        $n = 10;

        $result = print_multiplying_table($m, $n);

        echo '<div>' . $result . '</div><br/>';

        ?>
        <hr/>

        <h2>Task #3</h2>
        <h6>Calculate Sum and Average</h6>
        <?php

        $datas = array(10, 11, 12);

        $result = summarize_data($datas);

        $str_data = implode(', ', $datas);

        echo "datas = $str_data";

        echo "<p>Sum = {$result['sum']} <br/> Average = {$result['average']}</p><br/>";

        ?>
        <hr/>

    </div>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>