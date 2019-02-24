<?php

require_once "conf.inc.php";

function connectDb(){
	try{
		$db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME ,DB_USER , DB_PWD);
	}catch(Exception $e){
		die( "Erreur SQL  : ".$e->getMessage()  );
	}

	return $db;
}

function generateAccessToken($mailDriver){
	$db = connectDb();
	//modification de la bdd avec un nouvel access token
	$accessToken = MD5(uniqid()."epzibgOJV?S1212Sfx>");
	//inserer en bdd le token
	$addToken = $db->prepare("UPDATE USER set access_token = :accessToken WHERE email = :email");
	$addToken->execute(["accessToken" => $accessToken, "mailDriver"=>$mailDriver]);
	//stocker dans une variable de session le token
	return $accessToken;
}
