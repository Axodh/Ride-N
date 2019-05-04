<?php require_once "conf.inc.php";

function connectDb(){
    try{ $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME ,DB_USER , DB_PWD); }
    catch(Exception $e){ die( "Erreur SQL  : ".$e->getMessage() ); }
    return $db;
}

function generateAccessToken($mailDriver){
    $db = connectDb();
    //modification de la bdd avec un nouvel access token
    $accessToken = MD5(uniqid()."epzibgOJV?S1212Sfx>");
    //inserer en bdd le token
    $addToken = $db->prepare("UPDATE driver set accessToken = :accessToken WHERE mailDriver = :mailDriver");
    $addToken->execute(["accessToken" => $accessToken, "mailDriver"=>$mailDriver]);
    //stocker dans une variable de session le token
    return $accessToken;
}

function isConnected(){
    if(!empty($_SESSION["mailUser"])){
        $db = connectDb();
        $checkSession = $db->prepare("SELECT 1 FROM user WHERE mailUser = :mailUser");
        $checkSession->execute(array(
            "mailUser"=>$_SESSION["mailUser"],
        ));

        if($checkSession->rowCount()){
            $_SESSION["accessToken"] = generateAccessToken($_SESSION["mailUser"]);
            return true;
        } else{
            logout();
            return false;
        }
    } else return false;
}

function logout($redirect = false){
    $db = connectDb();

    $out = $db->prepare("UPDATE user WHERE mailUser = :mailUser");
    $out->execute(["mailUser"=>$_SESSION["mailUser"]]);
    unset($_SESSION["mailUser"]);
    unset($_SESSION["surnameUser"]);

    if($redirect){ header("Location: index.php"); }
}

$db = connectDb();
