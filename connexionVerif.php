<?php require_once "functions.php";

$error = false;
$submitForm = [];

$account = $db->prepare("SELECT surnameUser, pwd, isBanned FROM user WHERE mailUser = :mailUser");
$account -> execute(["mailUser"=>$_POST["mailUser"]]);
$pwdv = $account->fetch();
if(!$pwdv["isBanned"]){
    if(!empty($account)){
        if(password_verify($_POST["pwd"], $pwdv['pwd'])){
            $_SESSION["mailConnected"] = $_POST["mailUser"];
            $_SESSION["surnameConnected"] = $pwdv["surnameUser"];
            header("Location: index.php");
        }else{
            $error = true;
            $submitForm['error'][] = 7;
        }
    }
}
else{
    $error = true;
    $submitForm['error'][] = 8;
}

if($error){
    $_SESSION["dataForm"] = $_POST;
    $_SESSION["errors_form"] = $submitForm['error'];
    header("Location: logIn.php");
}
