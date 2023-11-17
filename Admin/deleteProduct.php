<?php

	$serverName = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "product";

	$conn = mysqli_connect($serverName,$user,$pass,$dbname);
	$id = $_GET['id'];
	$sql = "DELETE FROM category WHERE id = $id";
	$result = mysqli_query($conn, $sql);
	header("location: displayProduct.php");
?>