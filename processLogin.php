<?php
$email = $_POST['email'];
$password = $_POST['password'];
$conn = mysqli_connect('localhost','root', '', 'evoting');
$sql = "SELECT * FROM register WHERE Email = '$email' AND Password = '$password'";

$res = mysqli_query($conn, $sql);
$asc = mysqli_fetch_assoc($res);
$count = is_countable($asc);
if($count>0)
{
	$_SESSION['email'] = $asc['Email'];
	header('location: index.php');
}
else
{
	$_SESSION['msg'] = "Invalid Email and password";
	header('location: login.php');
}

?>