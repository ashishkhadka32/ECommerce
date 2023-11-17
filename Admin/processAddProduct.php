<?php
include 'adminHeader.php';
include 'adminFooter.php'; 
	$serverName = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "product";

	$conn = mysqli_connect($serverName,$user,$pass,$dbname);
	if(isset($_POST['submit']))
	{
		$product = $_POST['product'];
		$price = $_POST['price'];
		$company = $_POST['company'];
		$option = $_POST['option'];
		$detail = $_POST['detail'];
		$file = $_FILES['photo'];


		$filename = $file['name'];
		$filepath = $file['tmp_name'];
		$fileerror = $file['error'];
		 if($fileerror==0)
		 {
		 	$destfile = './upload/'.$filename;
		 	move_uploaded_file($filepath, $destfile);
		 	$sql = "INSERT INTO category VALUES('','{$product}', '{$price}', '{$company}', '{$option}', '{$detail}','{$destfile}')";
		 	$query = mysqli_query($conn,$sql);
		 	if ($query) {
		 		header ("location: displayProduct.php");
		 	}
		 	else {
		 		echo "not inserted";
		 	}
		 }

	}
	else
	{
		echo "Not clicked";
	}

?>