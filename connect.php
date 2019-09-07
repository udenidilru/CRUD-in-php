<?php

$dbservername = "localhost";
$dbUsername="root";
$dbPassword="";
$dbName="vorchid";

$conn=mysqli_connect($dbservername,$dbUsername,$dbPassword,$dbName);
if($conn->connect_error){
	die("connection failed". $conn->connect_error);
}
?>