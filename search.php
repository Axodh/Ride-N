<?php
require_once "Database.php";
$db = new Database("viaxe","localhost","root","");

  if(isset($_POST["request"])){
    $statement = $db->query("SELECT * FROM customer WHERE (`pseudo` LIKE '%".$_POST["request"]."%') ");
    var_dump($statement);
  }else{
    http_response_code(400);
  }
