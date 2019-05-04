<?php require_once "functions.php";

$error = false;
$submitForm = [];

$account = $db->prepare("SELECT surnameDriver pwd, isBanned FROM driver WHERE mailDriver = :mailDriver");
$account -> execute(["mailDriver"=>$_POST["mailDriver"]]);
$pwdv = $account->fetch();
if(!$pwdv["isBanned"]){
    if(!empty($account)){
        if(password_verify($_POST["pwd"], $pwdv['pwd'])){
            $_SESSION["mailUser"] = $_POST["mailDriver"];
            $_SESSION["surnameUser"] = $pwdv["surnameDriver"];
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
    header("Location: logInDriver.php");
}
