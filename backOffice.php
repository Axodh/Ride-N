<?php
session_start();
ini_set("display_errors", 1);
require_once "Database.php";
require_once "Manage.php";

$db = new Database("viaxe","localhost","root","");
$resultUnbanned = $db->query("SELECT id,mail,pseudo,age,gender,isBanned FROM customer WHERE isBanned = 0");
$resultBanned = $db->query("SELECT id,mail,pseudo,age,gender,isBanned FROM customer WHERE isBanned = 1");
$resultUnbannedDriver = $db->query("SELECT id,mail,pseudo,age,gender,isBanned FROM guide WHERE isBanned = 0");
$resultBannedDriver = $db->query("SELECT id,mail,pseudo,age,gender,isBanned FROM guide WHERE isBanned = 1");


?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/theme.css" type="text/css">
</head>

<body class="bg-light h-100 w-100">
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container"> <a class="navbar-brand" href="#">
        <i class="fa d-inline fa-lg fa-stop-circle"></i>
        <b> Ride'N</b>
      </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar10">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar10">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"> <a class="nav-link" href="#">Features</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Pricing</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">About</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">FAQ</a> </li>
        </ul> <a class="btn navbar-btn ml-md-2 btn-light text-dark">Contact us</a>
      </div>
    </div>
  </nav>
  <div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="nav nav-tabs">
          <li class="nav-item"> <a href="" class="active nav-link" data-toggle="tab" data-target="#tabone">Client Manager</a> </li>
          <li class="nav-item"> <a class="nav-link" href="" data-toggle="tab" data-target="#tabtwo">Banned Client</a> </li>
          <li class="nav-item"> <a href="" class="nav-link" data-toggle="tab" data-target="#tabthree">Driver Manager</a> </li>
          <li class="nav-item"> <a href="" class="nav-link" data-toggle="tab" data-target="#tabfour">Banned Driver</a> </li>
        </ul>
        <div class="tab-content mt-2">
          <div class="tab-pane fade show active" id="tabone" role="tabpanel">
            <div class="py-5">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="table-responsive">
                      <table class="table table-striped table-borderless">
                        <thead>
                          <tr>
                            <th scope="col">Mail</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Gender</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $manage = new Manage($resultUnbanned);  ?>

                        </tbody>
                      </table>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="tabtwo" role="tabpanel">
              <div class="py-5">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="table-responsive">
                        <table class="table table-striped table-borderless">
                          <thead>
                            <tr>
                              <th scope="col">Mail</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Gender</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $manage = new Manage($resultBanned);  ?>
                          </tbody>
                        </table>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="tab-pane fade" id="tabthree" role="tabpanel">
            <div class="py-5">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="table-responsive">
                      <table class="table table-striped table-borderless">
                        <thead>
                          <tr>
                            <th scope="col">Mail</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Gender</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $manage = new Manage($resultUnbannedDriver);  ?>
                        </tbody>
                      </table>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="tabfour" role="tabpanel">
            <div class="py-5">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="table-responsive">
                      <table class="table table-striped table-borderless">
                        <thead>
                          <tr>
                            <th scope="col">Mail</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Gender</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $manage = new Manage($resultBannedDriver);  ?>
                        </tbody>
                      </table>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <script src="modal.js"> </script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>
