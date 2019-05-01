<?php

if(!isset($_GET['lang']) && !isset($_GLOBALS['lang'])) {
    $_GLOBALS['lang'] = "fr";
} else {
    if($_GET['lang'] == "fr" || $_GET['lang'] == "en" || $_GET['lang'] == "es") {
        $_GLOBALS['lang'] = $_GET['lang'];
    }
}