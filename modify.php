<?php
ini_set("display_errors", 1);
require_once "Manage.php";
require_once "Database.php";
$db = new Database("viaxe","localhost","root","");

if($_POST['table'] == 'user'){
  $modify = $db->queryModify("UPDATE user SET mailUser = :mailUser,
                                              nameUser = :nameUser,
                                              surnameUser = :surnameUser,
                                              addressUser = :addressUser,
                                              cityUser = :cityUser,
                                              zipCode = :zipCode,
                                              numberUser = :numberUser
                                              WHERE mailUser = :mailUser",
                                              $_POST["mailUser"],
                                              $_POST["nameUser"],
                                              $_POST["surnameUser"],
                                              $_POST["addressUser"],
                                              $_POST["cityUser"],
                                              $_POST["zipCode"],
                                              $_POST["numberUser"]);
}else if($_POST['table'] == 'driver'){
  $modify = $db->queryModify("UPDATE driver SET mailDriver = :mailDriver,
                                                nameDriver = :nameDriver,
                                                lastNameDriver = :lastNameDriver,
                                                addr = :addr,
                                                numberUser = :numberUser,
                                                age = :age
                                                WHERE mailDriver = :mailDriver",
                                                $_POST["mailDriver"],
                                                $_POST["nameDriver"],
                                                $_POST["lastNameDriver"],
                                                $_POST["addr"],
                                                $_POST["number"],
                                                $_POST["age"]);
}
