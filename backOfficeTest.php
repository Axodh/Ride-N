<?php
ini_set("display_errors", 1);
require_once "Database.php";

$db = new Database("viaxe","localhost","root","");
$query = $db->query('SELECT * FROM customer');
var_dump($query);
