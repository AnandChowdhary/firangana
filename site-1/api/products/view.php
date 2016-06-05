<h3>Products</h3>
<style type="text/css">
	td, th { padding: 10px }
</style>

<h4><a href="new.php">Add new</a></h4>

<?php

	include "../database.php";

	$sql = "SELECT * FROM products_new";
	$result = $con -> query($sql);

	if ($result -> num_rows > 0) {
		echo "<table width=100% border=1><th>Product ID</th><th>Name</th><th>Description</th><th>Category</th><th>Price</th><th>Date Added</th>";
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row["id"]. "</td><td>" . $row["productName"]. "</td><td>" . $row["productDesc"]. "</td><td>" . $row["productCategory"]. "</td><td>" . $row["productPrice"]. "</td><td>" . $row["dateAdded"] . "</td></tr>";
		}
	} else {
		echo "0 results";
	}

?>