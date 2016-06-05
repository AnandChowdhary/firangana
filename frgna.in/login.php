<?php
	session_start();
	if (isset($_SESSION["username"])) {
		header("Location: index.php");
	}
?><!doctype html>
<html>

	<head>

		<title>Firangana URL Shortener</title>

		<link rel="stylesheet" type="text/css" href="grid.css">
		<link rel="stylesheet" type="text/css" href="styles.css">

	</head>

	<body>

		<div class="login-form">
			<h1 class="title" style="line-height: 1.3">Firangana URL Shortener<br><br>If you&rsquo;re here by mistake, <a href="http://www.firangana.com">click here</a> to go to Firangana.<br><br></h1>
			<?php
				if (isset($_GET["try"]) == 1) {
					echo "<p>That's an incorrect login, sorry.</p>";
				}
			?>
			<form action="check_login.php" method="post">
				<input class="login-form__input login-form--fullwidth" name="username" type="text" placeholder="Username" autofocus required>
				<input class="login-form__input login-form--fullwidth" name="password" type="password" placeholder="Password" required>
				<input class="login-form__submit login-form--big login-form--primary" type="submit" value="Login">
			</form>
		</div>

	</body>

</html>