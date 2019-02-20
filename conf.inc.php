<?php
	define("DB_USER", "root");
	define("DB_PWD", "");
	define("DB_HOST", "localhost");
	define("DB_NAME", "riden");


$submitForm = [
	'error' =>  [

								1=>"Le nom doit faire entre 2 et 50 caractères.",
								2=>"Le prénom doit faire entre 2 et 50 caractères.",
								3=>"l'email ne correspond pas au format demandé.",
								4=>"Le mot de passe doit faire en 8 et 64 caractères.",
								5=>"les mots de passe ne correspondent pas.",
								6=>"L'email existe déjà.",
								7=>"Les identitfiants ne sont pas valide",
								8=>"Le compte à été supprimé",
                10=>"L'adresse doit faire entre 2 et 70 caractères.",
                11=>"La ville doit faire entre 2 et 50 caractères.",
                12=>"Le Code postal est incorrect.",
                13=>"Le numéro n'existe pas.",

							],
	'success' => [

	]
];
