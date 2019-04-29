<?php
session_start();
require_once "conf.inc.php";
require_once "functions.php";

if(isConnected()){
    logout(true);
}
else header("Location: index.php");
