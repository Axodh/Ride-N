<?php

require_once "header.php";

if( count($_POST) == 6
	&& !empty($_POST["nameDriver"])
	&& !empty($_POST["surnameDriver"])
	&& !empty($_POST["mailDriver"])
	&& !empty($_POST["pwd"])
  && !empty($_POST["pwd2"])
	&& !empty($_POST["numberDriver"])
){


$error = false;
$listOfErrors = [];

	$_POST["nameDriver"] = trim($_POST["nameDriver"]);
	$_POST["surnameDriver"] = trim($_POST["surnameDriver"]);
	$_POST["mailDriver"] = trim($_POST["mailDriver"]);
	$_POST["numberDriver"] = trim($_POST["numberDriver"]);


if( strlen($_POST["nameDriver"]) <2 || strlen($_POST["nameDriver"]) > 50 ){
  $error = true;
  $listOfErrors[] = 1;
}

if( strlen($_POST["surnameDriver"]) <2 || strlen($_POST["surnameDriver"]) > 50 ){
  $error = true;
  $listOfErrors[] = 2;
}

if( !filter_var($_POST["mailDriver"], FILTER_VALIDATE_EMAIL) ){
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

  if( strlen($_POST["numberDriver"]) != 10 ){
    $error = true;
    $listOfErrors[] = 13;
  }

  $query = $db->prepare("SELECT mailDriver FROM driver WHERE mailDriver=:mailDriver");
	$query->execute( [ "mailDriver"=>$_POST["mailDriver"]  ] );
	$resultat = $query->fetch();

	if(  !empty($resultat) ){
		$error = true;
		$listOfErrors[] = 6;
	}

if($error){
		$_SESSION["errors_form"] = $listOfErrors;
		$_SESSION["data_form"] = $_POST;
		header("Location: registerDriver.php");
}else{

$query = $db->prepare(" INSERT INTO driver
								(nameDriver, surnameDriver, mailDriver, pwd, numberDriver)
								VALUES
								(:nameDriver, :surnameDriver, :mailDriver, :pwd, :numberDriver) ");

$pwd = password_hash($_POST["pwd"], PASSWORD_DEFAULT);

$return = $query->execute( [
                "nameDriver"=>$_POST["nameDriver"],
                "surnameDriver"=>$_POST["surnameDriver"],
                "mailDriver"=>$_POST["mailDriver"],
                "pwd"=>$pwd,
                "numberDriver"=>$_POST["numberDriver"],
  ] );

header("Location: LogInDriver.php");
}

}else {
  die("Veuillez revenir à la page précédente. Vous n'avez pas rempli tous les champs ! ");
}
?>
