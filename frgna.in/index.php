<?php
	session_start();
	if (!isset($_SESSION["username"])) {
		header("Location: http://www.firangana.com");
	}
?>
<!doctype html>
<html>

	<head>

		<title>Firangana</title>

		<link rel="stylesheet" type="text/css" href="grid.css">
		<link rel="stylesheet" type="text/css" href="styles.css">

	</head>

	<body>

		<header class="masthead">

			<div class="container">

				<div class="eight columns">
					<nav>
						<ul>
							<li><a href="http://www.firangana.com" target="_blank"><strong>Firangana</strong></a></li>
						</ul>
					</nav>
				</div>

				<div class="four columns text-right">
					<a href="logout.php">Log out</a>
				</div>

			</div>

		</header>

		<main>

			<div class="container">

				<form action="newLink.php" method="post">
					<input style="width: 79%;" class="login-form__input login-form--fullwidth" name="link" type="text" placeholder="Paste long link here..." required>
					<input style="width: 20%; float: right; margin: 0" class="login-form__submit login-form__submit--primary login-form__submit--margin" type="submit" value="Shorten">
				</form>

				<?php
					$server = "localhost";
					$username = "classkwo_firang";
					//$username = "root";
					$password = "anand01";
					//$password = "";

					$connection = new mysqli($server, $username, $password, "classkwo_firangana");
					//$connection = new mysqli($server, $username, $password, "firangi");
					if ($connection -> connect_error) {
						echo "Error connecting to database!<br><br>";
					}
					$sql = "SELECT * FROM shortlinks ORDER BY id DESC";
					$result = $connection -> query($sql);
						echo "<table>";
						echo "<tr><th>Shortlink</th><th>Longlink</th><th>Analytics</th><th>Link</th></tr>";
						while($row = $result -> fetch_assoc()) {
							echo "<tr>";
							echo "<td>" . $row["shortlink"] . "</td>";
							echo "<td>" . $row["longlink"] . "</td>";
							echo "<td><a target='_blank' href='http://frgna.in/analytics.php?shortlink=".$row["shortlink"]."'>View</a></td>";
							echo "<td><a target='_blank' href='http://frgna.in/".$row["shortlink"]."'>Open</a></td>";
							echo "</tr>";
						}
						echo "</table>";
				?>

			</div>

		</main>

	</body>

</html>