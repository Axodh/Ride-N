<?php require_once "Database.php";
$db = new Database("riden","localhost","root","");

if(isset($_POST["request"]) && isset($_POST["filterUser"]) && isset($_POST["filterBan"])) {
    if($_POST["filterUser"] == "user" && $_POST["filterBan"] == "nBanned"){ $statement = $db->query("SELECT * FROM user WHERE (`nameUser` LIKE '%".$_POST["request"]."%') AND isBanned = 0 "); }
    elseif($_POST["filterUser"] == "user" && $_POST["filterBan"] == "banned"){ $statement = $db->query("SELECT * FROM user WHERE (`nameUser` LIKE '%".$_POST["request"]."%') AND isBanned = 1"); }
    elseif($_POST["filterUser"] == "driver" && $_POST["filterBan"] == "nBanned"){ $statement = $db->query("SELECT * FROM driver WHERE (`nameUser` LIKE '%".$_POST["request"]."%') AND isBanned = 0 "); }
    elseif($_POST["filterUser"] == "driver" && $_POST["filterBan"] == "banned"){ $statement = $db->query("SELECT * FROM driver WHERE (`nameUser` LIKE '%".$_POST["request"]."%') AND isBanned = 1 "); }
} else { http_response_code(400); }
