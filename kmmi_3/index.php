<?php

    // Array

    // Indexed Array
    $menus = [
        'Home',
        'Human Resource',
        'Finance',
        'Accounting',
        'IT'
    ];

    // Assoc Array
    $menus_translation = array(
       'HOME' => 'Beranda',
       'HR' => 'Departemen Personalia',
       'FINANCE' => 'Keuangan',
       'ACCOUNTING' => 'Accounting',
       'IT' => 'Teknologi Informasi'
    );

    // Multimensional
    $menu_features = array(
        array(
            'code' => 'HOME',
            'name' => 'home',
            'description' => 'Displaying data sumary'
        ),
        array(
            'code' => 'HR',
            'name' => 'hr',
            'description' => 'Human resources management'
        ),
        array(
            'code' => 'FINANCE',
            'name' => 'finance',
            'description' => 'Manage finance report'
        ),
        array(
            'code' => 'ACCOUNTING',
            'name' => 'accounting',
            'description' => 'Manage accounting in/out bound transaction'
        ),
        array(
            'code' => 'IT',
            'name' => 'it',
            'description' => 'Information Technlogy'
        ),
    );

    //echo json_encode($menu_features[0]);
?> 

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .menu-container{
            margin-left: 0;
        }
        .menu-container li {
            display: inline-block;
            list-style: none;
            background: #ebebeb;
            margin-left: 5px;
            padding: 4px 16px;
        }
        .menu-container a {
            text-decoration: none;
            font-weight: bold;
        }

    </style>

  </head>

  <body>
    
    <div class="col-8" style="margin: auto;">
        <h3>Single Dimension Array</h3>

        <ul>

            <?php
            
            foreach ($menus as $key => $value) {
                echo "
                    <li>
                        $value    
                    </li>
                ";
            }
            
            ?>
        </ul>
        <hr>

        <h3>Multidimension Array</h3>

        <ul class="menu-container">

            <?php
            
            foreach ($menu_features as $key => $value) {
                echo "
                    <a href='pages/{$value['name']}.php'
                    title='{$value['description']}'>
                        <li>{$value['code']}</li>
                    </a>
                ";
            }
            ?>
        </ul>

    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>