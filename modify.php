<?php
ini_set("display_errors", 1);
require_once "Manage.php";
require_once "Database.php";
$db = new Database("riden","localhost","root","");


if(trim($_POST["table"]) == "user"){
  $modify = $db->queryModifyUser("UPDATE user SET mailUser = :mailUser,
                                              nameUser = :nameUser,
                                              surnameUser = :surnameUser,
                                              addressUser = :addressUser,
                                              cityUser = :cityUser,
                                              zipCode = :zipCode,
                                              numberUser = :numberUser
                                              WHERE mailUser = :mailUser",
                                              trim($_POST["mailUser"]),
                                              trim($_POST["nameUser"]),
                                              trim($_POST["surnameUser"]),
                                              trim($_POST["addressUser"]),
                                              trim($_POST["cityUser"]),
                                              trim($_POST["zipCode"]),
                                              trim($_POST["numberUser"]),
                                              trim($_POST["mailUser"]));

}else if(trim($_POST['table']) == 'driver'){
  $modify = $db->queryModifyDriver("UPDATE driver SET mailDriver = :mailDriver,
                                                nameDriver = :nameDriver,
                                                lastNameDriver = :lastNameDriver,
                                                addr = :addr,
                                                number = :number,
                                                age = :age
                                                WHERE mailDriver = :mailDriver",
                                                trim($_POST["mailDriver"]),
                                                trim($_POST["nameDriver"]),
                                                trim($_POST["lastNameDriver"]),
                                                trim($_POST["addr"]),
                                                trim($_POST["number"]),
                                                trim($_POST["age"]),
                                                trim($_POST["mailDriver"]));
}
