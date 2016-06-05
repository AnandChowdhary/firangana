<?php
	session_start();
	if (!isset($_SESSION["username"])) {
		header("Location: login.php");
	}
	$shortlink = $_GET["shortlink"];
?><!doctype html>
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
					$sql = "SELECT * FROM linkanalytics WHERE shortlink = '" . $shortlink . "' ORDER BY id DESC LIMIT 0, 50";
					$result = $connection -> query($sql);
					$sql2 = "SELECT longlink FROM shortlinks WHERE shortlink = '" . $shortlink . "'";
					$result2 = $connection -> query($sql2);
					while($row2 = $result2 -> fetch_assoc()) {
						$longlink = $row2["longlink"];
					}
					echo "<h1>There have  been " . $result -> num_rows . " visits.<br>Shortlink: <a href='link.php?link=" . $shortlink . "'>".$shortlink."</a><br>Longlink: <a target='_blank' href='" . $longlink . "'>".$longlink."</a></h1>";
						echo "<table>";
						echo "<tr><th>IP Address</th><th>Date Time</th><th>User Agent</th><th>Referer</th></tr>";
						while($row = $result -> fetch_assoc()) {
							echo "<tr>";
							echo "<td>" . $row["ipaddress"] . "</td>";
							echo "<td>" . $row["timing"] . "</td>";
							echo "<td>" . $row["useragent"] . "</td>";
							echo "<td>" . $row["referer"] . "</td>";
							echo "</tr>";
						}
						echo "</table>";
				?>

			</div>

		</main>

	</body>

</html>