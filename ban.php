<?php
ini_set("display_errors", 1);

require_once "Database.php";
$db = new Database("riden","localhost","root","");

if($_POST["isBanned"] == 0 && $_POST["table"] == 'user'){
  $db->queryBan("UPDATE user SET isBanned = 1 WHERE mailUser = :mailUser",  $_POST["mailUser"]);
  var_dump($_POST["mailUser"],$_POST["isBanned"]);
}
if($_POST["isBanned"] == 1 && $_POST["table"] == 'user'){
  $db->queryBan("UPDATE user SET isBanned = 0 WHERE mailUser = :mailUser",  $_POST["mailUser"]);
  var_dump($_POST["mailUser"],$_POST["isBanned"]);
}

if($_POST["isBanned"] == 0 && $_POST["table"] == 'driver'){
  $db->queryBanDriver("UPDATE driver SET isBanned = 1 WHERE mailDriver = :mailDriver",  $_POST["mailDriver"]);
  var_dump($_POST["mailDriver"],$_POST["isBanned"]);
}

if($_POST["isBanned"] == 1 && $_POST["table"] == 'driver'){
  $db->queryBanDriver("UPDATE driver SET isBanned = 0 WHERE mailDriver = :mailDriver",  $_POST["mailDriver"]);
  var_dump($_POST["mailDriver"],$_POST["isBanned"]);
}
