<!doctype html>
<html lang="en">
  <head>
    <title>Practice</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <?php
    
    // $array = array(1, 2, 3, 5, 8, 13, 21, 34, 55);

    // foreach ($array as $key => $value) {
    //     if ($value %2 !== 0) {
    //         echo "<p>$value  is an odd number</p>";
    //     }else {
    //         echo "<p>$value  is an even number</p>";
    //     }
    // }
    
    ?>

    <!-- <div class="col-8" style="margin: auto;">
        <form action="">
        <div>
            <label for="">Number</label>
            <input name="number" type="text" placeholder="Input Number"> <br>
        </div>
        <div style="margin-top: 10px">
            <button>Submit</button> <br>
        </div>

    </form>
    <?php
    
    // $number = @$_GET['number'];

    //     if ($number %2 !== 0) {
    //         echo "<p>$number  is an odd number</p>";
    //     }else {
    //         echo "<p>$number  is an even number</p>";
    //     }
    
    ?>
    </div> -->

    <div class="col-8" style="margin: auto;">
      <h2>Task #1</h2>
      <h6>Odd and Even Number</h6>

      <div class="container">
          <form action="task1.php" method="GET">
              <div class="mb-3 row">
                  <label for="start" class="col-sm-1-12 col-form-label">Start</label>
                  <div class="col-sm-1-12">
                      <input type="number" class="form-control" name="start" id="start" placeholder="">
                  </div>
              </div>
              <div class="mb-3 row">
                  <label for="end" class="col-sm-1-12 col-form-label">End</label>
                  <div class="col-sm-1-12">
                      <input type="number" class="form-control" name="end" id="end" placeholder="">
                  </div>
              </div>
              <fieldset class="mb-3 row">
                  <legend class="col-form-legend col-sm-1-12">Number Type</legend>
                  <div class="col-sm-1-12">
                      <div class="btn-group" role="group" aria-label="Number Type">

                          <input type="radio" class="btn-check" name="number_type" id="even" value="even">
                          <label class="btn btn-outline-primary" for="even">Even</label>

                          <input type="radio" class="btn-check" name="number_type" id="odd" value="odd">
                          <label class="btn btn-outline-primary" for="odd">Odd</label>

                      </div>
                  </div>
              </fieldset>
              <div class="mb-3 row">
                  <div class="offset-sm-2 col-sm-10">
                      <button type="submit" class="btn btn-primary">Action</button>
                  </div>
              </div>
          </form>
      </div>

      <hr />

      <h2>Task #2</h2>
      <h6>Document Retention Analytics</h6>

      <?php

      $max_retention_data = [
          'A201' => 3,
          'A411' => 1,
          'B312' => 1,
          'C012' => 2
      ];

      $document_datas = [
          array(
              'code' => 'A201',
              'storing_date' => '12-07-2017',
              'title' => 'Laporan Keuangan Departemen A 2017'
          ),
          array(
              'code' => 'A201',
              'storing_date' => '03-10-2019',
              'title' => 'Laporan Kas 2019'
          ),
          array(
              'code' => 'B312',
              'storing_date' => '01-03-2021',
              'title' => 'Nota Ticket CS001201'
          ),
          array(
              'code' => 'C012',
              'storing_date' => '10-10-2018',
              'title' => 'Nota Pekerjaan No 21032018-II'
          ),
      ];

      ?>

      <table class="table table-hover table-inverse table-responsive">
          <thead class="thead-default">
              <tr>
                  <th>No</th>
                  <th>Document Code</th>
                  <th>Storing Date</th>
                  <th>Document Title</th>
                  <th>Storing Period</th>
                  <th>Status</th>
              </tr>
          </thead>
          <tbody>

              <?php

              $counter = 0;

              $time_now = time(); // Ambil waktu sekarang format unix time (satuan detik)

              foreach ($document_datas as $key => $value) {
                  
                  $counter ++;

                  $time_storing = strtotime($value['storing_date']); // konversi ke format unix time (satuan detik)

                  $diff_time = $time_now - $time_storing;

                  $diff_year = $diff_time / 3.154e+7;

                  $two_dec_year = round($diff_year, 2);

                  $status_info = $diff_year > $max_retention_data[$value['code']]?'Disposal is Needed':'Safe to keep';

                  echo "
                              <tr>
                                  <td scope='row'>$counter</td>
                                  <td>{$value['code']}</td>
                                  <td>{$value['storing_date']}</td>
                                  <td>{$value['title']}</td>
                                  <td>$two_dec_year year(s)</td>
                                  <td>$status_info</td>
                              </tr>
                          ";
              }
              ?>

          </tbody>
      </table>
      
      <hr>
      <h2>Task #3</h2>
      <h6>Math Formula</h6>

      <?php

    //    $result = []

    //   $number = range(0, 100);

    //   $x = ($number %2 != 0);

    //   $formula = "2*$x*2*$x + 3$x + 1";

    //   echo "$formula";

    //   echo "<i>f(x)</i> = 2x<sup>2</sup>-3x+1<br><br/>"; 
      
      ?>

      <table class="table table-hover table-inverse table-responsive">
          <thead class="thead-default">
              <tr>
                  <th><i>f(x)</i></th>
                  <th>2x<sup>2</sup> - 3x + 1</th>
              </tr>
          </thead>
          <tbody>

              <?php
              
                for ($x=0; $x <= 100; $x++) { 
                        if ($x %2 !== 0) { 
                            
                            $a = 2*$x**2 - 3*$x + 1;

                            echo "
                            <tr>
                                <td scope='row'>$x</td>
                                <td>$a</td>
                            
                            </tr>
                        ";
                        }
                    }
              
              ?>

          </tbody>
      </table>
      
      
    </div>
    
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>