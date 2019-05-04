<?php
ini_set("display_errors", 1);
require_once "Database.php";
require_once "manage.php";
require_once "navbar.php";

?>

  <div class="container">
    <nav>
        <div class="nav-wrapper teal">
          <form>
            <div class="input-field">
              <input id="search" type="search" required>
              <label class="label-icon" for="search"><i class="material-icons">search</i></label>
              <i class="material-icons">close</i>
            </div>
          </form>
        </div>
      </nav>
    <div class="row">
      <div class="col-md-12">
        <form class="form-inline">
          <div class="input-group">
            <form method="POST" action="search.php">
              <label for=user>User</label>
              <select class="custom-select d-block w-100" id="condition" required="">
                 <option id="user" value="user" selected>User</option>
                 <option id="driver" value="driver">Driver</option>
              </select>
              <label for=condition>Condition</label>
              <select class="custom-select d-block w-100" id="condition" required="">
                 <option id="nBanned" value="nBanned"selected >Not Banned</option>
                 <option id="Banned" value="banned">Banned</option>
              </select>
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search"/>
              <div class="input-group-append"><button type="button" onclick="research()" class="btn btn-primary"><i class="fa fa-search"></i></button></div>
            </form>
            <div>
              <ul id="display">
              </ul>
            </div>
          </div>
        </form>
        <div class="row">
           <div class="col s12">
             <ul class="tabs teal accent-3">
               <li class="tab col s3"><a class="active white-text" href="#test1">Client Manager</a></li>
               <li class="tab col s3"><a class="white-text" href="#test2">Banned Client</a></li>
               <li class="tab col s3"><a class="white-text" href="#test3">Driver Manager</a></li>
               <li class="tab col s3"><a class="white-text" href="#test4">Banned Driver</a></li>
             </ul>
           </div>
           <div id="test1" class="col s12">
             <table class="striped center light-blue lighten-2">
               <thead>
                 <tr>
                   <th>Mail</th>
                   <th>First</th>
                   <th>Last</th>
                 </tr>
               </thead>
               <tbody>
                   <?php showUser(dbQuery('ntBanned', 'user')); ?>
               </tbody>
             </table>
           </div>
           <div id="test2" class="col s12">
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
                 <?php showUser(dbQuery('isBanned', 'user'));?>
               </tbody>
             </table>
           </div>
           <div id="test3" class="col s12">
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
                 <?php showDriver(dbQuery('ntBanned', 'driver')); ?>
               </tbody>
             </table>
           </div>
           <div id="test4" class="col s12">
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
                 <?php showDriver(dbQuery('isBanned', 'driver'))?>
               </tbody>
             </table>
           </div>
         </div>

  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/backOffice.js"></script>

</body>
</html>
