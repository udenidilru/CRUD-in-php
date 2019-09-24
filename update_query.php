<?php

if(isset($_POST['submit'])){
	include('connect.php')

	$code=$_POST['Product_code'];
	$price=$_POST['Price'];

	$sql=UPDATE products set Price='$price' where Product_code='$code';

	if(mysqli_query($conn,$sql){
		echo "successfully updated";

		header(Location:update.php)
	}else{
		echo "error";
	}
}