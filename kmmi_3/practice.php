<?php

// task 1
$dokumen_data = array(
    array(
        'code' => 'A201',
        'name' => 'Finance Report',
        'retention_period' => 3
    ),
    array(
        'code' => 'A411',
        'name' => 'Consumer NDA',
        'retention_period' => 1
    ),
    array(
        'code' => 'B312',
        'name' => 'Consumer Report',
        'retention_period' => 1
    ),
    array(
        'code' => 'C012',
        'name' => 'Work Order Note',
        'retention_period' => 2
    )
);

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Practice Task</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .matrix-table{
            border: 1px solid #000;
            border-width: 0 1px;
            
        }
        .matrix-table td{
            padding: 3px 10px;
        }
    </style>

  </head>

  <body>
      <div class="col-8" style="margin: auto;">
          <h2>Task #1</h2>
          <h6>Define array to store a set of data</h6>
          
          <table class="table table-striped table-inverse table-responsive">
              <thead class="thead-default">
                  <tr>
                      <th>No</th>
                      <th>Document Code</th>
                      <th>Document Name</th>
                      <th>Retention Period</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php
                  
                    $counter = 0;

                    foreach ($dokumen_data as $key => $value) {
                        $counter++;
                        echo "
                        <tr>
                            <td scope='row'>$counter</td>
                            <td>{$value['code']}</td>
                            <td>{$value['name']}</td>
                            <td>{$value['retention_period']}</td>
                        </tr>
                        ";
                    }
                  
                  ?>

                  </tbody>
          </table>

          <br>
          <h2>Task#2</h2>
          <h6>Addition of 2 matrices(3 x 3)</h6>

          <?php
          
          $matrix_a = [
              [1, 2, 3],
              [5, 4, 2],
              [7, 1, 9]
          ];
          
          $matrix_b = [
              [4, 1, 8],
              [3, 7, 2],
              [5, 8, 3]
          ];

          $matrix_sum = array();

         // $matrix_sum[] = [ $matrix_a[0][0] + $matrix_b[0][0], $matrix_a[0][1] + $matrix_b[0][1], $matrix_a[0][2] + $matrix_b[0][2]];
         // $matrix_sum[] = [ $matrix_a[1][0] + $matrix_b[1][0], $matrix_a[1][1] + $matrix_b[1][1], $matrix_a[1][2] + $matrix_b[1][2]];
         // $matrix_sum[] = [ $matrix_a[2][0] + $matrix_b[2][0], $matrix_a[2][1] + $matrix_b[2][1], $matrix_a[2][2] + $matrix_b[2][2]];

          foreach ($matrix_a as $key => $value) {
            $matrix_sum[] = [$matrix_a[$key][0] + $matrix_b[$key][0], $matrix_a[$key][1] + $matrix_b[$key][1], $matrix_a[$key][2] + $matrix_b[$key][2]];
        }

          ?>
          
        <b><i>a = </i></b>
            <table class="matrix-table">
                <tbody>

                    <?php
                    foreach ($matrix_a as $key => $value) {
                        echo "
                        <tr>
                            <td>{$value[0]}</td>
                            <td>{$value[1]}</td>
                            <td>{$value[2]}</td>
                        </tr>
                        ";
                    }
                    ?>
                </tbody>
            </table>

        <br />
        <b><i>b = </i></b>
            <table class="matrix-table">
                <tbody>

                    <?php
                    foreach ($matrix_b as $key => $value) {
                        echo "
                        <tr>
                            <td>{$value[0]}</td>
                            <td>{$value[1]}</td>
                            <td>{$value[2]}</td>
                        </tr>
                        ";
                    }
                    ?>
                </tbody>
            </table>

        <br />
        <b><i>a + b = </i></b>
            <table class="matrix-table">
                <tbody>

                    <?php
                    foreach ($matrix_sum as $key => $value) {
                        echo "
                        <tr>
                            <td>{$value[0]}</td>
                            <td>{$value[1]}</td>
                            <td>{$value[2]}</td>
                        </tr>
                        ";
                    }
                    ?>
                </tbody>
            </table>

            <br>
            <h2>Task #3</h2>
            <h6>Create an image gallery</h6>

            <?php
            
            $available_items = array(
                array(
                    'image_path' => 'mango-emoji.png',
                    'label' => 'Mango',
                    'description' => 'Fresh mango'
                ),
                array(
                    'image_path' => 'milk.png',
                    'label' => 'Milk',
                    'description' => 'Pure cows milk'
                ),
                array(
                    'image_path' => 'coffee-to-go.png',
                    'label' => 'Coffe',
                    'description' => 'Best coffe choice'
                ),
            );

            foreach ($available_items as $key => $value) {
                echo "
                    <div class='col-12' style='display: flex; border: 1px solid grey;'>
                        <div style='width: 200; background: #ebebeb; padding: 10px;'>
                            <img width=120 src='images/{$value['image_path']}'>
                        </div>
                        <div style='flex: 1; background: #ebebeb;'>
                            <h4>{$value['label']}</h4>
                            <p>{$value['description']}</p>
                        </div>
                    </div>
                ";
            }
            
            ?>
            <br>
            <br>

      </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>

