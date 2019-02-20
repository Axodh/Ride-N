<?php

require_once "header.php";

if( count($_POST) == 9
	&& !empty($_POST["nameUser"])
	&& !empty($_POST["surnameUser"])
	&& !empty($_POST["mailUser"])
	&& !empty($_POST["pwd"])
  && !empty($_POST["pwd2"])
 	&& !empty($_POST["addressUser"])
	&& !empty($_POST["cityUser"])
	&& !empty($_POST["zipCode"])
	&& !empty($_POST["numberUser"])
){


$error = false;
$listOfErrors = [];

	$_POST["nameUser"] = trim($_POST["nameUser"]);
	$_POST["surnameUser"] = trim($_POST["surnameUser"]);
	$_POST["mailUser"] = trim($_POST["mailUser"]);
	$_POST["addressUser"] = trim($_POST["addressUser"]);
	$_POST["cityUser"] = trim($_POST["cityUser"]);
	$_POST["zipCode"] = trim($_POST["zipCode"]);
	$_POST["numberUser"] = trim($_POST["numberUser"]);


if( strlen($_POST["nameUser"]) <2 || strlen($_POST["nameUser"]) > 50 ){
  $error = true;
  $listOfErrors[] = 1;
}

if( strlen($_POST["surnameUser"]) <2 || strlen($_POST["surnameUser"]) > 50 ){
  $error = true;
  $listOfErrors[] = 2;
}

if( !filter_var($_POST["mailUser"], FILTER_VALIDATE_EMAIL) ){
		$error = true;
		$listOfErrors[] = 3;
	}

  if( strlen($_POST["pwd"])< 8 ||  strlen($_POST["pwd"])>64 ){
		$error = true;
		$listOfErrors[] = 4;
	}

  if( $_POST["pwd"] != $_POST["pwd2"] ) {
		$error = true;
		$listOfErrors[] = 5;
	}

	if(strlen($_POST["addressUser"]) < 2 || strlen($_POST["addressUser"]) > 70){
		$error = true;
		$listOfErrors[] = 10;
	}

  if(strlen($_POST["cityUser"]) < 2 || strlen($_POST["cityUser"]) > 50){
		$error = true;
		$listOfErrors[] = 11;
	}

	if(strlen($_POST["zipCode"]) != 5){
		$error = true;
		$listOfErrors[] = 12;
	}

  if( strlen($_POST["numberUser"]) != 10 ){
    $error = true;
    $listOfErrors[] = 13;
  }

  $query = $db->prepare("SELECT mailUser FROM user WHERE mailUser=:mailUser");
	$query->execute( [ "mailUser"=>$_POST["mailUser"]  ] );
	$resultat = $query->fetch();

	if(  !empty($resultat) ){
		$error = true;
		$listOfErrors[] = 6;
	}

if($error){
		$_SESSION["errors_form"] = $listOfErrors;
		$_SESSION["data_form"] = $_POST;
		header("Location: register.php");
}else{

$query = $db->prepare(" INSERT INTO user
								(nameUser, surnameUser, mailUser, pwd, addressUser, cityUser, zipCode, numberUser)
								VALUES
								(:nameUser, :surnameUser, :mailUser, :pwd, :addressUser, :cityUser, :zipCode, :numberUser) ");

$pwd = password_hash($_POST["pwd"], PASSWORD_DEFAULT);

$return = $query->execute( [
                "nameUser"=>$_POST["nameUser"],
                "surnameUser"=>$_POST["surnameUser"],
                "mailUser"=>$_POST["mailUser"],
                "pwd"=>$pwd,
                "addressUser"=>$_POST["addressUser"],
                "cityUser"=>$_POST["cityUser"],
                "zipCode"=>$_POST["zipCode"],
                "numberUser"=>$_POST["numberUser"],
  ] );

header("Location: logIn.php");
}

}else {
  die("Veuillez revenir à la page précédente. Vous n'avez pas rempli tous les champs ! ");
}
?>
