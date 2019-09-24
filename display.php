<?php


	include('connect.php');


	$sql="SELECT*FROM products";

	$result=mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Display data</title>
	<link rel="stylesheet" href="table.css">
</head>
<body>
	<?php 
		include_once('show.php');
	 ?>
	<table>
		<tr>
			<th>Product_name</th>	
			<th>Product_code</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Description</th>
		</tr>

		<?php
		if($result){
		if(mysqli_num_rows($result)>0){
			while($row=mysqli_fetch_assoc($result)){
				echo '<tr>
					<td>'.$row['Product_name'].'</td>
					<td>'.$row['Product_code'].'</td>
					<td>'.$row['Price'].'</td>
					<td>'.$row['Quantity'].'</td>
					<td>'.$row['Description'].'</td>
				</tr>';
			}
			}
		}else{
				echo "error";
	}

	?>
	</table>
</body>
</html>

	

