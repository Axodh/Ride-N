<?php require_once "functions.php";

$error = false;
$submitForm = [];


$account = $db->prepare("SELECT pwd, isDeleted FROM user WHERE mailUser = :mailUser");
$account -> execute(["mailUser"=>$_POST["mailUser"]]);
$pwdv = $account->fetch();
if(!$pwdv["isDeleted"]){
    if(!empty($account)){
        if(password_verify($_POST["pwd"], $pwdv['pwd'])){
            $_SESSION["mailUser"] = $_POST["mailUser"];
            $_SESSION["surnameUser"] = $_POST["surnameUser"];
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
