<?php

	include "database.php";

	$_username = $_POST["username"];
	$_password = $_POST["password"];

	if ($_password == "anand01" && $_username == "anand") {
		session_start();
		$_SESSION["username"] = $_username;
		header("Location: index.php");
	} else {
		header("Location: login.php?try=1");
	}

?>