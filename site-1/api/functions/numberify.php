<?php

	include "functions.php";

	for ($i = 0; $i < 2000000; $i+=100) {
		echo $i . " is " . numberify($i) . "<br>";
		if ($i > 3000) {
			$i += 1000;
		}
		if ($i > 10000) {
			$i += 100000;
		}
	}

?>