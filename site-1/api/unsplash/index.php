<form method="post">
	<fieldset>
		<legend>Collections</legend>
		<?php
		$dir = ".";
		$blacklist = array('.', '..', "cases.php", "index.php");
		if (is_dir($dir)) {
			if ($dh = opendir($dir)) {
				while (($file = readdir($dh)) !== false) {
					if (!in_array($file, $blacklist)) {
						$directory = $file;
						$files = scandir($directory);
						$num_files = count($files) - 2;
						echo '<p><a href="cases.php?dir=' . $file . '">' . ucfirst($file) . '</a> (' . $num_files . ')</p>';
					}
				}
				closedir($dh);
			}
		}

	?>
	</fieldset>
</form>