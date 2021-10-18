<!doctype html>
<html lang="en">
  <head>
    <title>KMMI 2021 - Build and Desain Web</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>

  <body>
    <?php
      
    // $is_logged = TRUE;
    // $role_code = "ADMIN";

    // if ($is_logged && $role_code == 'OPERATOR') {
    //     echo '<p>Logged in as Administrator</p>';
    // }

    // $number_data = range(1, 100);

    // foreach ($number_data as $key => $value) {
    //     if ($value % 2 !== 0) {
    //         echo "<p>$value</p>";
    //     }else {
    //         echo "<p>$value is not an odd number</p>";
    //     }
    // }
      
    // $random_numb = rand(1, 100);

    // $is_even = ($random_numb % 2 == 0);

    // echo "
    //     <h2 style='background: " . ($is_even ? 'red' : 'blue') . ";'>$random_numb</h2>
    // ";

    ?>

    <div class="col-8" style="margin: auto;">
        <h3>WHILE Loop</h3>

        <ul>

            <?php

            $counter = 0;

            while ($counter <= 10) {
                $counter++;
                echo "
                    <li>
                        $counter
                    </li>
                ";
            }

            ?>
        </ul>
        <hr>
        
        <h3>DO-WHILE Loop</h3>

        <ul>

            <?php

            $session = TRUE;
            $counter = 0;

            do {
                $counter++;
                echo "
                    <li>
                        $counter
                    </li>
                ";
                if ($counter > 10) {
                    $session = FALSE;
                }
            } while ($session);

            ?>
        </ul>
        <hr>

        <h3>FOR Loop</h3>

        <ul>

            <?php

            for ($i = 0; $i < 10; $i++) {
                for ($j=0; $j < $i; $j++) { 
                   echo "#";
                }
                echo "
                  <br>
                ";
            }            

            ?>
        </ul>
        <hr>

        <h3>FOREACH Loop</h3>

        <ul>

            <?php

            $matrix_a = [
                [1, 2, 3],
                [5, 4, 2],
                [7, 1, 9]
            ];
            
            foreach ($matrix_a as $key => $value) {
                for ($i=0; $i < count($value); $i++) { 
                    echo $value[$i] . "\t";
                }

                echo '<br>';
            }

            ?>
        </ul>
        <hr>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>