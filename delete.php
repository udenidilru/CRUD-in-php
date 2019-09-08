<!DOCTYPE html>
<html>
<head>
	<title>delete_data</title>
	<link rel="stylesheet"  href="log.css">
</head>
<body>
	<?php
		include_once('show.php');
	?>

	<div class="log">
		<div class="form">
			<form action="delete.php" method="post">
				<input type="text" placeholder="Product_name" name="Product_name">
				<input type="text" placeholder="Product_code" name="Product_code">
				<input type="submit" name="submit" value="delete">
			</form>
		</div>
	</div>
</body>
</html>