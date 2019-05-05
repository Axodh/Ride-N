<?php require_once "conf.inc.php";

function connectDb(){
    try{ $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME ,DB_USER , DB_PWD); }
    catch(Exception $e){ die( "Erreur SQL  : ".$e->getMessage() ); }
    return $db;
}

function isConnected(){
    if(!empty($_SESSION["mailConnected"])){
        $db = connectDb();
        $checkSession = $db->prepare("SELECT 1 FROM user WHERE mailUser = :mailUser");
        $checkSession->execute(["mailUser"=>$_SESSION["mailConnected"]]);

        if($checkSession->rowCount()) return true;
        else {
            $db = connectDb();
            $checkSession = $db->prepare("SELECT 1 FROM driver WHERE mailDriver = :mailDriver");
            $checkSession->execute(["mailDriver" => $_SESSION["mailConnected"]]);
            if ($checkSession->rowCount()) return true;
            else {
                logout();
                return false;
            }
        }
    } else return false;
}

function logout($redirect = false){
    unset($_SESSION["mailConnected"]);
    unset($_SESSION["surnameConnected"]);

    if($redirect){ header("Location: index.php"); }
}

$db = connectDb();
