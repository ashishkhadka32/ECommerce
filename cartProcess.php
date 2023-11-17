<?php
if(isset($_POST["Add_To_Cart"]))
{
	$conn = mysqli_connect('localhost','root', '', 'product');

		// $id = $_POST['id'];
		$name = $_POST['Item_Name'];
		$price = $_POST['Price'];
		$shopcart = mysqli_query($conn, "SELECT * FROM `shopcart` WHERE product_name='$name'");
			if(mysqli_num_rows($shopcart))
			{
				echo "
				<script>
					alert('Item already added to cart');
					window.location.href= 'index.php';
				</script>";
			}
			else
			{
				$sql = "INSERT INTO shopcart(`product_name`, `product_price`) VALUES ('{$name}', '{$price}')";
				$res = mysqli_query($conn, $sql);
				if($res)
				{	
					echo "
					<script>
					alert('Item added to cart');
					window.location.href= 'index.php';
					</script>";
						
				}
					
			}

		
		
			
}

	


?>