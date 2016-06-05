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

	date_default_timezone_set('Asia/Kolkata');

	$shortlink = $_GET["link"];
	$sql2 = "INSERT INTO linkanalytics (shortlink, ipaddress, timing, useragent, referer) VALUES ('" . $shortlink . "', '" . $_SERVER['REMOTE_ADDR'] . "', '" . date("l j F Y h:i:s A") . "', '" . $_SERVER['HTTP_USER_AGENT'] . "', '" . $_SERVER['HTTP_REFERER'] . "')";
	if ($connection -> query($sql2)) {
		$sql2 = "SELECT longlink FROM shortlinks WHERE shortlink = '" . $shortlink . "'";
					$result2 = $connection -> query($sql2);
					while($row2 = $result2 -> fetch_assoc()) {
						$longlink = $row2["longlink"];
					}
		header("Location: " . $longlink);
	}

?>