<?php

	$serverName = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "product";

	$conn = mysqli_connect($serverName,$user,$pass,$dbname);
	$id = $_GET['Order_Id'];
	$sql = "DELETE FROM order_manager WHERE Order_Id = $id";
	$result = mysqli_query($conn, $sql);
	header("location: orderDetails.php");
?>