<?php
session_start();
$name = $_POST['name'];
$password = $_POST['password'];
$serverName = "localhost";
$user = "root";
$pass = "";
$dbName = "product";

$conn = mysqli_connect($serverName, $user, $pass, $dbName);
$sql = "SELECT * FROM admin WHERE Email = '$name' AND Password = '$password'";

$res = mysqli_query($conn, $sql);
$asc = mysqli_fetch_assoc($res);
$count = is_countable($asc);
if($count>0)
{
	$_SESSION['name'] = $asc['Email'];
	header('location: dashboard.php');
}
else
{
	$_SESSION['msg'] = "Invalid Email and password";
	header('location: login.php');
}

?>