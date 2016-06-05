<?php
	if (isset($_POST["productName"])) {
		include "../database.php";
		$productName = $_POST["productName"];
		$productPrice = $_POST["productPrice"];
		$productCategory = $_POST["productCategory"];
		$productDesc = $_POST["productDesc"];
		mysqli_query($con, "INSERT INTO products_new (productName, productPrice, productPriceOriginal, productCategory, productDesc, dateAdded) VALUES ('" . $productName . "', '" . $productPrice . "', '" . $productPriceOriginal . "', '" . $productCategory . "', '" . $productDesc . "', '" . date("Y/m/d h:i:sa") . "')");
		header("Location: view.php");
	} else {
?>
<form method="post">
	<fieldset>
		<legend>Add Product</legend>
		<p>
			<label for="productName">Name of product: </label>
			<input type="text" name="productName" id="productName" required>
		</p>
		<p>
			<label for="productPrice">Price: &#8377; </label>
			<input type="text" name="productPrice" id="productPrice" required>
		</p>
		<p>
			<label for="productCategory">Category ID: </label>
			<select name="productCategory" id="productCategory" required>
				<?php
					include "../database.php";
					$sql = "SELECT * FROM categories";
					$result = $con -> query($sql);
					if ($result -> num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							echo "<option>" . $row["categoryName"] . "</option>";
						}
					}
				?>
			</select>
		</p>
		<p>
			<label for="productDesc">Description: </label><br>
			<textarea name="productDesc" id="productDesc" cols="50" rows="5"></textarea>
		</p>
		<p>
			<input type="submit" value="Add Product">
		</p>
	</fieldset>
</form>
<?php
	}
?>