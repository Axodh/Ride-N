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
