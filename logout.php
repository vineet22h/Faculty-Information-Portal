<?php
session_start();
$_SESSION["logged_in"] = false;
unset($_SESSION["id"]);
unset($_SESSION["name"]);
header("location: home.php");
?>
