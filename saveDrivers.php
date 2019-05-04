<?php $pageTitle = "Save Drivers";
require_once "navbar.php";

if( count($_POST) == 6
&& !empty($_POST["surnameDriver"])
&& !empty($_POST["nameDriver"])
&& !empty($_POST["numberDriver"])
&& !empty($_POST["mailDriver"])
&& !empty($_POST["pwdDriver"])
&& !empty($_POST["pwdDriver2"])
){

	$error = false;
	$listOfErrors = [];

	$_POST["surnameDriver"] = trim($_POST["surnameDriver"]);
	$_POST["nameDriver"] = trim($_POST["nameDriver"]);
	$_POST["numberDriver"] = trim($_POST["numberDriver"]);
	$_POST["mailDriver"] = trim($_POST["mailDriver"]);

	if(strlen($_POST["surnameDriver"])<2 || strlen($_POST["surnameDriver"])>50) {
		$error = true;
		$listOfErrors[] = 2;
	}

	if(strlen($_POST["nameDriver"])<2 || strlen($_POST["nameDriver"])>50) {
		$error = true;
		$listOfErrors[] = 1;
	}

	if(strlen($_POST["numberDriver"])!=10) {
		$error = true;
		$listOfErrors[] = 13;
	}

	if(!filter_var($_POST["mailDriver"], FILTER_VALIDATE_EMAIL)) {
		$error = true;
		$listOfErrors[] = 3;
	}

	if(strlen($_POST["pwdDriver"])<8 ||  strlen($_POST["pwdDriver"])>64) {
		$error = true;
		$listOfErrors[] = 4;
	}

	if($_POST["pwdDriver"] != $_POST["pwdDriver2"]) {
		$error = true;
		$listOfErrors[] = 5;
	}

	$query = $db->prepare("SELECT mailDriver FROM driver WHERE mailDriver=:mailDriver");
	$query->execute( [ "mailDriver"=>$_POST["mailDriver"] ] );
	$resultat = $query->fetch();

	if(!empty($resultat)) {
		$error = true;
		$listOfErrors[] = 6;
	}

	if($error) {
		$_SESSION["errors_form"] = $listOfErrors;
		$_SESSION["data_form"] = $_POST;
		header("Location: register.php");
	} else {

		$query = $db->prepare(" INSERT INTO driver
			(surnameDriver, nameDriver, numberDriver, mailDriver, pwdDriver)
			VALUES
			(:surnameDriver, :nameDriver, :numberDriver, :mailDriver, :pwdDriver) ");

			$pwd = password_hash($_POST["pwdDriver"], PASSWORD_DEFAULT);

			$return = $query->execute( [
				"surnameDriver"=>$_POST["surnameDriver"],
				"nameDriver"=>$_POST["nameDriver"],
				"numberDriver"=>$_POST["numberDriver"],
				"mailDriver"=>$_POST["mailDriver"],
				"pwdDriver"=>$pwd,
				] );

				header("Location: logInDriver.php");
			}

		} else {
			echo '
			<main>
			<div class="container">
			<div class="row">
			<div class="col s12 m8 offset-m2 center"><br>
			<h3 class="center white-text">' .$GLOBALS['SAVE_BACK']. '</h3>
			<h3 class="center white-text">' .$GLOBALS['SAVE_WARN']. '</h3>
			</div>
			</div>
			</div>
			</main>';
		}
		require_once "footer.php";
