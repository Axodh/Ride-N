<?php
ini_set("display_errors", 1);
require_once "Database.php";
require_once "Manage.php";
require_once "navbar.php";
$db = new Database("viaxe","localhost","root","");
$resultUnbanned = $db->query("SELECT id,mail,pseudo,age,gender,isBanned FROM customer WHERE isBanned = 0");
$resultBanned = $db->query("SELECT id,mail,pseudo,age,gender,isBanned FROM customer WHERE isBanned = 1");
$resultUnbannedDriver = $db->query("SELECT id,mail,pseudo,age,gender,isBanned FROM guide WHERE isBanned = 0");
$resultBannedDriver = $db->query("SELECT id,mail,pseudo,age,gender,isBanned FROM guide WHERE isBanned = 1");


?>


  <div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <form class="form-inline">
          <div class="input-group">
            <form method="POST" action="search.php">
              <label for=user>User</label>
              <select class="custom-select d-block w-100" id="condition" required="">
                 <option id="user" value="user" >User</option>
                 <option id="driver" value="driver">Driver</option>
              </select>
              <label for=condition>Condition</label>
              <select class="custom-select d-block w-100" id="condition" required="">
                 <option id="nBanned" value="nBanned" >Not Banned</option>
                 <option id="Banned" value="banned">Banned</option>
              </select>
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search"/>
              <div class="input-group-append"><button type="button" onclick="research()" class="btn btn-primary"><i class="fa fa-search"></i></button></div>
            </form>
          </div>
        </form>
        <div id = "display"></div>
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
                          <?php $manage = new Manage($resultUnbanned);
                                $manage->showUser($resultUnbanned);
                         ?>

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
                            <?php $manage = new Manage($resultBanned);
                                  $manage->showUser($resultBanned);
                           ?>
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
                          <?php $manage = new Manage($resultUnbannedDriver);
                                $manage->showDriver($resultUnbannedDriver);
                          ?>
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
                          <?php $manage = new Manage($resultBannedDriver);
                                $manage->showDriver($resultBannedDriver);
                          ?>
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
  <script src="search.js"> </script>
  <script src="modal.js"> </script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>
