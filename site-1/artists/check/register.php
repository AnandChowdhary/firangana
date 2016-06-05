<?php
	include "../../api/database.php";
	$categoryName = $_POST["categoryName"];
	$categoryDesc = $_POST["categoryDesc"];
	mysqli_query($con, "INSERT INTO categories (categoryName, categoryDesc, dateAdded) VALUES ('" . $categoryName . "', '" . $categoryDesc . "', '" . date("Y/m/d h:i:sa") . "')");
	header("Location: view.php");
?>

<!doctype html>
<html>

	<head>

		<!-- Title -->
		<title>Firangiana</title>
		<meta property="og:title" itemprop="name" content="Firangiana">
		
		<!-- Image -->
		<meta property="og:image" content= "../img/social.png">
		<link itemprop="image" href="../img/social.png">

		<!-- Content -->
		<meta property="og:url" content= "http://firangi.co">
		<meta property="og:type" content="website">
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:site" content="agektmr">

		<!-- Description -->
		<meta property="og:description" itemprop="description" content="DESC">
		<meta name="description" content="DESC">

		<!-- Viewport -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 

		<!-- Stylesheets -->
		<link rel="stylesheet" type="text/css" href="../styles.css">
		<link rel="stylesheet" type="text/css" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Karla:400,400italic,700">
		
		<!-- Theme -->
		<meta name="theme-color" content="#e74c3c">
		<meta name="msapplication-navbutton-color" content="#e74c3c">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="white-translucent">

		<!-- Icons -->
		<link rel="icon" sizes="192x192" href="../icon.png">
		<link rel="apple-touch-icon" href="../icon.png">


	</head>

	<body>

		<div class="logo">
			<img src="../logo.png" alt="Firangana Partners">
		</div>
		<div class="login-form">
			<h1>Error</h1>
			<p>Invalid Invitation Code</p>
			<p><a href="../">&larr; Go Back</a></p>
		</div>

	</body>

</html>