<?php
session_start();
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PWD", "");
define("DB_NAME", "riden");

/* Multilingue */
if(!isset($_SESSION['lang'])) $_SESSION['lang'] = "en"; // def lang
require_once $_SESSION['lang'] . "/text.php";
