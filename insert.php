<!DOCTYPE html>
<html>
<head>
	<title>Enter data</title>
	<link rel="stylesheet" href="log.css">
</head>
<body>

	<div class="log">
		<div class="form">
			<form action="insert.php" method="post">
				<input type="text" placeholder="Product_name" name="Product_name">
				<input type="text" placeholder="Product_code" name="Product_code">
				<input type="number" placeholder="Price" name="Price">
				<input type="number" placeholder="Quantity" name="Quantity">
				<input type="text" placeholder="Description" name="Description">

				<input type="submit" name="submit" value="Enter">
			</form>
		</div>
	</div>
</body>
</html>