<?php
session_start();
ini_set("display_errors", 1);
require_once "Manage.php";
require_once "Database.php";
$db = new Database("viaxe","localhost","root","");

if($_POST["isBanned"] == 0){
  $modify = $db->queryBan("UPDATE customer SET isBanned = 1 WHERE mail = :mail",  $_POST["mail"]);
}

if($_POST["isBanned"] == 1){
  $modify = $db->queryBan("UPDATE customer SET isBanned = 0 WHERE mail = :mail",  $_POST["mail"]);
}
