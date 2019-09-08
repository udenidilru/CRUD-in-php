<?php

if(isset($_POST['submit'])){
	include('connect.php');

	$Product_name = $_POST['Product_name'];
	$Product_code = $_POST['Product_code'];
	$Price = $_POST['Price'];
	$Quantity = $_POST['Quantity'];
	$Description = $_POST['Description'];

	if($Product_name!=NULL && $Product_code!=NULL && $Price!=NULL && $Quentity!=NULL && $Description!=NULL){
	$sql= INSERT INTO products(Product_name,Product_code,Price,Quantity,Description)VALUES('$Product_name','$Product_code','$Price','$Quantity','$Description');

	if(mysqli_query($conn,$sql)){
		echo "successfully added";
	}
	else{
		echo "error";
	}

header("Location: insert.php");
}	
?>