<?php
session_start();
if(isset($_GET['lang']) && $_GET['lang'] != "fr" && $_GET['lang'] != "en" && $_GET['lang'] != "es") $_GET['lang'] = $_SESSION['lang'];
$_SESSION['lang'] = $_GET['lang'];
header("Location: index.php");
