<?php
require_once "Database.php";
$db = new Database("riden","localhost","root","");


  if(isset($_POST["request"])
  && isset($_POST["filterUser"])
  && isset($_POST["filterBan"])){
    if($_POST["filterUser"] == "user" && $_POST["filterBan"] == "nBanned"){
        $statement = $db->query("SELECT * FROM user WHERE (`nameUser` LIKE '%".$_POST["request"]."%') AND isBanned = 0 ");
    }
    if($_POST["filterUser"] == "user" && $_POST["filterBan"] == "banned"){
        $statement = $db->query("SELECT * FROM user WHERE (`nameUser` LIKE '%".$_POST["request"]."%') AND isBanned = 1");
    }
    if($_POST["filterUser"] == "driver" && $_POST["filterBan"] == "nBanned"){
        $statement = $db->query("SELECT * FROM driver WHERE (`nameDriver` LIKE '%".$_POST["request"]."%') AND isBanned = 0 ");
    }
    if($_POST["filterUser"] == "driver" && $_POST["filterBan"] == "banned"){
        $statement = $db->query("SELECT * FROM driver WHERE (`nameDriver` LIKE '%".$_POST["request"]."%') AND isBanned = 1 ");
    }

    echo "<table class='striped center'>
      <thead>
        <tr>
          <th>Mail</th>
          <th>First</th>
          <th>Last</th>
        </tr>
      </thead>";
    echo "<tbody>";
  foreach ($statement as $res) {
    echo "<tr>";
    echo "<td>";
    echo  $res->nameUser;
    echo "</td>";
    echo "<td>";
    echo  $res->surnameUser;
    echo "</td>";
    echo "<td>";
    
    echo "</td>";
    echo "</tr>";
    echo "<br>";
  }
  echo "</tbody>";
  }else{
    http_response_code(400);
  }
