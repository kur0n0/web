<?php require_once "config.php";

session_destroy();
UnSet($_SESSION['userIsLoged']);
header('location: /');
