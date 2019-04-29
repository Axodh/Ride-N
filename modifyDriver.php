<?php
ini_set("display_errors", 1);
require_once "manage.php";
require_once "Database.php";
$db = new Database("riden","localhost","root","");

$modify = $db->queryModify("UPDATE driver SET mailDriver = :mailDriver, 
                                            pseudo = :pseudo, 
                                            age= :age, 
                                            gender = :gender 
                                            WHERE mail = :mail", $_POST["mail"], $_POST["pseudo"], $_POST["age"], $_POST["gender"]);
