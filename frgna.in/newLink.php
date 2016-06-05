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

	$link = $_POST["link"];

	// Generate long link
	$chars = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '-', '_');
	$sameLink = 0;
	$longlink = array('', '', '', '', '');

	while ($sameLink < 1) {
		shuffle($chars);
		for ($i = 0; $i < 5; $i++) {
			$longlink[$i] = $chars[$i];
		}
		$sql1 = "SELECT id FROM shortlinks WHERE shortlink = '" . $longlink . "'";
		$result = $connection -> query($sql1);
		if ($result -> num_rows == 0) {
			$sameLink++;
		}
	}

	$sql2 = "INSERT INTO shortlinks (shortlink, longlink) VALUES ('" . implode("", $longlink) . "', '" . $link . "')";
	if ($connection -> query($sql2)) {
		header("Location: index.php");
	}

?>