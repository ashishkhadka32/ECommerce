
<?php
session_start();
$conn = mysqli_connect('localhost','root', '', 'product');
if(!$conn)
{
		echo "<script>
				alert('not connected');
				</script>";
				exit();
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(isset($_POST['purchase']))
	{
		$sql = "INSERT INTO `order_manager`(`Full_Name`, `Contact`, `Address`) VALUES ('$_POST[full_name]','$_POST[contact]','$_POST[address]')";
		if(mysqli_query($conn, $sql))
		{
			header('location: index.php');
			// $Order_Id = mysqli_insert_id($conn);
			// $sql1 = "INSERT INTO `user_orders`(`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
			// $stmt = mysqli_prepare($conn, $sql1);
			// if($stmt)
			// {
			// 	mysqli_stmt_bind_param($stmt, "isii",$Order_Id,$Item_Name,$Price,$Quantity);
			// 	foreach($_POST["Add_To_Cart"] as $key => $value)
			// 	{
			// 		$Item_Name=$value['Item_Name'];
			// 		$Price=$value['Price']*$value['Quantity'];
			// 		$Quantity=$value['Quantity'];
			// 		mysqli_stmt_execute($stmt);

			// 	}
			// 	unset($_SESSION['cart']);
			// 	echo "<script>
			// 	alert('order placed');
			// 	window.location.href='index.php';
			// 	</script>";

			// }
			// else
			// {
			// 	echo "<script>
			// 	alert('SQL query prepare Error');
			// 	window.location.href='myCart.php';
			// 	</script>";
			// }	
		// }
		// else
		// {
		// 	echo "<script>
		// 		alert('SQL Error');
		// 		window.location.href='myCart.php';
		// 		</script>";
		// }
		}

	}

}
if(isset($_POST['purchase']))
{
	$sql = "DELETE FROM shopcart";
	mysqli_query($conn, $sql);
	echo "<script>alert('order confirm')</script>";
	sleep(0.5);
	header('Location: index.php');
}
?>