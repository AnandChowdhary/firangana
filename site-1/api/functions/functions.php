<?php

	function numberify($num) {
		$num = intval($num);
		if ($num < 1000)
			return $num;
		else if ($num >= 1000 && $num < 1000000)
			return number_format($num / 1000, 1) . "K";
		else
			return number_format($num / 1000000, 1) . "M";
	}

?>