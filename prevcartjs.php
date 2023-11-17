<!-- <?php
session_start();



if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(isset($_POST["Add_To_Cart"]))
	{
		if(isset($_SESSION['cart']))
		{
			$myitems=array_column($_SESSION['cart'],'Item_Name');
			if(in_array($_POST['Item_Name'],$myitems))
			{
				echo "<script>alert('Item Already Added');
				window.location.href='index.php';
				</script>";
			}
			else
			{
			$count = count($_SESSION['cart']);
			$_SESSION['cart'][$count]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
			echo "<script>alert('Item Added');
				window.location.href='index.php';
				</script>";
			}
		}
		else
		{
			$_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
			echo "<script>alert('Item Added');
				window.location.href='index.php';
				</script>";
		}
	}
	if(isset($_POST['Remove_Item']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($value['Item_Name']==$_POST['Item_Name'])
			{
				unset($_SESSION['cart'][$key]);
				$_SESSION['cart']=array_values($_SESSION['cart']);
				echo "<script>
				alert('Item Removed Successfully');
				window.location.href='myCart.php';
				</script>";
			}
		}
	}
		if(isset($_POST['Mod_Quantity']))
		{
			foreach($_SESSION['cart'] as $key => $value)
			{
				if($value['Item_Name']==$_POST['Item_Name'])
				{
					$_SESSION['cart'][$key]['Quantity']=$_POST['Mod_Quantity'];
					echo "<script>
					window.location.href='myCart.php';
					</script>";
				}
		
			}
	}

}

?>  -->
<!-- <?php

// Connect to the database
$host = "localhost";
$user = "root";
$password = "";
$dbname = "product";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get the product ID and quantity from the request
$id = $_POST["id"];
$name = $_POST["Item_Name"];
// $quantity = $_POST["product_quantity"];
$price = $_POST["Price"];
      

// Check if the item is already in the cart
$sql = "SELECT * FROM shopcart WHERE id = $id";
$result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//   // Update the existing cart item
//   $sql = "UPDATE shopcart SET product_quantity = product_quantity + '$quantity' WHERE product_id = '$product_id'";
// } 
  // Add a new cart item
  $sql = "INSERT INTO shopcart (product_name, product_price, product_quantity) VALUES ('$name', '$price')";


$query = mysqli_query($conn,$sql);

mysqli_close($conn);
header("Location: index.php");
?> -->