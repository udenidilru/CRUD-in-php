<!DOCTYPE html>
<html>
<head>
	<title>update_data</title>
	<link rel="stylesheet" href="log.css">
</head>
<body>
	<?php
		include_once('show.php');
	?>
	<div class="log">
		<div class="form">
			<form action="update_query.php" method="post">
				<input type="text" placeholder="Product_code" name="Product_code">
				<input type="number" placeholder="Price"name="Price">
				<input type="submit" name="submit">
			</form>
		</div>
	</div>
</body>
</html>