<?php
session_start();
ini_set("display_errors", 1);
require_once "Manage.php";
require_once "Database.php";
$db = new Database("viaxe","localhost","root","");

$modify = $db->queryModify("UPDATE customer SET mail = :mail, pseudo = :pseudo, age= :age, gender = :gender WHERE mail = :mail", $_POST["mail"], $_POST["pseudo"], $_POST["age"], $_POST["gender"]);
