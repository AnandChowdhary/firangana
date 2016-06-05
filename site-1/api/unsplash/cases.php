<style>
body {
	margin: 0;
}
.column {
	float: left;
	margin: 20px;
	text-align: center;
	font-family: sans-serif;
	line-height: 1.5;
	zoom: 0.9;
}
span {
	color: #aaa;
}
.case {
	margin-bottom: 20px;
	background: gray;
	width: 250px;
	border-radius: 30px;
	height: 455px;
	position: relative;
	box-shadow: -2px -2px 10px rgba(0,0,0,.25) inset, 2px 2px 10px white inset, 0px 2px 5px rgba(0, 0, 0, 0.25);
}
.case:after {
	box-shadow: -2px -2px 10px rgba(0,0,0,.25), 2px 2px 10px white, 0px 2px 5px rgba(0, 0, 0, 0.25) inset;
	border: 1px solid #ddd;
	content: "";
	width: 65px;
	border-radius: 30px;
	height: 30px;
	position: absolute;
	top: 20px;
	z-index: 1;
	left: 30px;
	background: white;
}
</style>
<div class="x">
<?php
	$dir = $_GET["dir"];
	$blacklist = array('.', '..', 'somedir', 'somefile.php');
	if (is_dir($dir)) {
		if ($dh = opendir($dir)) {
			while (($file = readdir($dh)) !== false) {
				if (!in_array($file, $blacklist)) {
					echo "<div class='column'><div class='case' style='background:url(" . str_replace(" ", "%20", $dir) . "/" . str_replace(" ", "%20", $file) . ") center;background-size:cover;'></div>" . substr($file, 0, -4) . "<br><span>iPhone 5/5s Case</span><br>&#8377;599 &middot; <strong>Add to Cart</strong></div>";
				}
			}
			closedir($dh);
		}
	}

?>
</div>