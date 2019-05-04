<?php $pageTitle = "Save Drivers";
require_once "navbar.php";

if( count($_POST) == 7
	&& !empty($_POST["nameDriver"])
	&& !empty($_POST["surnameDriver"])
	&& !empty($_POST["mailDriver"])
	&& !empty($_POST["addressDriver"])
	&& !empty($_POST["numberDriver"])
	&& !empty($_POST["pwdDriver"])
	&& !empty($_POST["pwd2"])
){

	$error = false;
	$listOfErrors = [];

	$_POST["mailDriver"] = trim($_POST["mailDriver"]);
	$_POST["nameDriver"] = trim($_POST["nameDriver"]);
	$_POST["surnameDriver"] = trim($_POST["surnameDriver"]);
	$_POST["addressDriver"] = trim($_POST["addressDriver"]);
	$_POST["numberDriver"] = trim($_POST["numberDriver"]);



	if(strlen($_POST["nameDriver"]) < 2 || strlen($_POST["nameDriver"]) > 50){
		$error = true;
		$listOfErrors[] = 1;
	}

	if(strlen($_POST["surnameDriver"]) < 2 || strlen($_POST["surnameDriver"]) > 50){
		$error = true;
		$listOfErrors[] = 2;
	}

	if(!filter_var($_POST["mailDriver"], FILTER_VALIDATE_EMAIL) ){
		$error = true;
		$listOfErrors[] = 3;
	}

	if(strlen($_POST["addressDriver"])<2 || strlen($_POST["addressDriver"])>70) {
		$error = true;
		$listOfErrors[] = 10;
	}

	if(strlen($_POST["pwdDriver"]) < 8 ||  strlen($_POST["pwdDriver"]) > 64){
		$error = true;
		$listOfErrors[] = 4;
	}

	if($_POST["pwdDriver"] != $_POST["pwd2"]) {
		$error = true;
		$listOfErrors[] = 5;
	}

	if(strlen($_POST["numberDriver"]) != 10 ){
		$error = true;
		$listOfErrors[] = 13;
	}

	$query = $db->prepare("SELECT mailDriver FROM driver WHERE mailDriver=:mailDriver");
	$query->execute( [ "mailDriver"=>$_POST["mailDriver"]  ] );
	$resultat = $query->fetch();

	if(!empty($resultat)) {
		$error = true;
		$listOfErrors[] = 6;
	}

	if($error) {
		$_SESSION["errors_form"] = $listOfErrors;
		$_SESSION["data_form"] = $_POST;
		header("Location: registerDriver.php");
	} else {
		$query = $db->prepare(" INSERT INTO driver(mailDriver, nameDriver, surnameDriver, addressDriver, pwdDriver, numberDriver)
								VALUES(:mailDriver, :nameDriver, :surnameDriver, :addressDriver, :pwdDriver, :numberDriver) ");

		$pwd = password_hash($_POST["pwdDriver"], PASSWORD_DEFAULT);

		$return = $query->execute( [
			":nameDriver"=>$_POST["nameDriver"],
			":surnameDriver"=>$_POST["surnameDriver"],
			":mailDriver"=>$_POST["mailDriver"],
			":numberDriver"=>$_POST["numberDriver"],
			":addressDriver"=>$_POST["addressDriver"],
			":pwdDriver"=>$pwd,
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
