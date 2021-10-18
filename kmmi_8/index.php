<!doctype html>
<html lang="en">

<head>
    <title>KMMI 2021 Web Design - Course 8</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <div class="col-6" style='margin: auto;'>
        <h2>Learn jQuery Basic</h2>
        <h6>Ajax Request No Params</h6>
        <div class="container">
            <div class="d-grid gap-2">
                <button type="button" id="btn-time" class="btn btn-primary">Get Server Time</button>
            </div>
            <p>Server time is: <span style="font-weight: 600;" id="server-time-box">N/A</span></p>
        </div>

        <hr />
        <h6>Ajax Request - Form Data(Convert IDR to USD)</h6>
        <div class="d-grid gap-2">
            <div class="container">
                <form id="currency">
                    <div class="mb-3 row">
                        <label for="input_number" class="col-sm-1-12 col-form-label"></label>
                        <div class="col-sm-1-12">
                            <input type="number" class="form-control" name="input_number" id="current-amount" placeholder="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Convert</button>
                        </div>
                    </div>
                </form>
                <p>In USD = <span style="font-weight: 600;" id="currency-result-box">N/A</span></p>
            </div>
        </div>

        <hr />
        <h6>Ajax Request - Login APP</h6>
        <div class="d-grid gap-2">
            <div class="container">
                <div class="card border-success" id="login-infobox" style='display: none;'>
                    <div class="card-body">
                        <h4 class="card-title" id="login-infobox-success">Success</h4>
                        <p class="card-text" id="login-infobox-message">Authentication successfull.</p>
                    </div>
                </div>
                <form id="login-app">
                    <div class="mb-3 row">
                        <label for="username" class="col-sm-1-12 col-form-label">Username</label>
                        <div class="col-sm-1-12">
                            <input type="text" class="form-control" name="username" placeholder="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-1-12 col-form-label">Password</label>
                        <div class="col-sm-1-12">
                            <input type="password" class="form-control" name="password" placeholder="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <hr />
        <h6>Ajax Request - Data Table</h6>
        <div class="d-grid gap-2">
            <div class="container">
                <form id='data-table-filter'>
                    Search: <input type="search" name="search" id="data-table-filter-text">
                    <input type="submit" value="Search">
                </form>
                <table class="table table-striped table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>No</th>
                            <th>Kota</th>
                            <th>Jumlah Kasus</th>
                        </tr>
                        </thead>
                        <tbody id="tbody-data-table">
                            
                        </tbody>
                        <tr>
                            <th colspan="3">Total data: <span id='infobox-total-data'>0</span></th>
                        </tr>
                        </tbody>
                        <tr>
                            <th colspan="3">Total row(s): <span id='infobox-total-row'>0</span></th>
                        </tr>
                </table>
                
            </div>
        </div>

        <hr />
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="app.js"></script>

</body>

</html>