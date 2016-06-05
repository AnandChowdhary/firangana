<?php
	if (isset($_POST["categoryName"])) {
		include "../database.php";
		$categoryName = $_POST["categoryName"];
		$categoryDesc = $_POST["categoryDesc"];
		mysqli_query($con, "INSERT INTO categories (categoryName, categoryDesc, dateAdded) VALUES ('" . $categoryName . "', '" . $categoryDesc . "', '" . date("Y/m/d h:i:sa") . "')");
		header("Location: view.php");
	} else {
?>
<form method="post">
	<fieldset>
		<legend>Add Category</legend>
		<p>
			<label for="categoryName">Name of category: </label>
			<input type="text" name="categoryName" id="categoryName" required>
		</p>
		<p>
			<label for="categoryDesc">Description: </label><br>
			<textarea name="categoryDesc" id="categoryDesc" cols="50" rows="5"></textarea>
		</p>
		<p>
			<input type="submit" value="Add Category">
		</p>
	</fieldset>
</form>
<?php
	}
?>