 <?php
	 include("header.php");

?>
<?php
if(!isset($_SESSION['email']))
{
	echo "<script> window.location.href='login.php';</script>";
}

?>


	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center border roundedbg-light my-5">
				<h1>My Cart</h1>
			</div>
			<div class="col-lg-9">
				<table class="table">
				  <thead class="text-center">
				    <tr>
				      <!-- <th scope="col">S.N.</th>
				      <th scope="col">Item Name</th>
				      <th scope="col">Item Price</th>
				      <th scope="col">Quantity</th>
				      <th scope="col">Total</th>
				      <th scope="col">Action</th> -->
				      <th scope="col">Id</th>
			      <th scope="col">Product Name</th>
			      <th scope="col">Price</th>
			      <!-- <th scope="col">company</th>
			      <th scope="col">category</th>
			      <th scope="col">Pics</th> -->
			      <th scope="col">Action</th>
				    </tr>
				  </thead>
				  <tbody class="text-center">
				  	<?php
				  	// if(isset($_SESSION['cart']))
				  	// {
				  	// foreach ($_SESSION['cart'] as $key => $value)
				   //  {
				    // 	$sn=$key+1;
				  		// echo"
				  		// <tr>
					  	// 	<td>$sn</td>
					  	//  	<td>$value[Item_Name]</td>
					  	//  	<td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
					  	//  	<td>
						  //  <form action='cartProcess.php' method='POST'>
						 	// 	<input class='text-center iquantity' name='Mod_Quantity'onclick='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='1'>
					  	//  	    <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
					  	//  	</form>
					  	//  	</td>
					  	//  	<td class='itotal'></td>
					  	//  	<td>
					  	//  	<form action='cartProcess.php' method='POST'>
					  	//  	<button name='Remove_Item' class='btn btn-sm btn-outline-danger'>Remove</button>
					  	//    <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
					  	// 	</form>
					  	//  	</td>
				  		//  </tr>

				  		// ";

			  		$serverName = "localhost";
					$user = "root";
					$pass = "";
					$dbname = "product";

					$conn = mysqli_connect($serverName,$user,$pass,$dbname);

					$selectquery = "SELECT * FROM shopcart";
					$result = mysqli_query($conn, $selectquery);
					$count = 1;

					if (mysqli_num_rows($result) > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
						?>
						<tr>
							<td> <?php echo $count++ ?></td>
							<td> <?php echo $row['product_name'] ?>
								<input type="hidden" name="product_name" value="<?php echo $row['product_name'] ?>">
							</td>
							<td> <?php echo $row['product_price'] ?>
								<input type="hidden" name="product_price" value="<?php echo $row['product_price'] ?>">
							</td>
							<!-- <td> <?php echo $row['company'] ?></td>
							<td> <?php echo $row['category'] ?></td> -->
							<td>
								<a href="deleteProduct.php?id=<?= $row['id'] ?>" onclick="return confirm('Are You Sure?');"><input type="submit" name="Delete" value="Delete" class="btn btn-success"></a>
							</td>
						</tr>

						<?php
					} 
				}


			  	?>
				  </tbody>
				</table>
			</div>

				<div class="col-lg-3">
					<div class="border bg-light rounded p-4">
						<?php
						$conn = mysqli_connect('localhost','root', '', 'product');
						$sql = "SELECT SUM(product_price) as grandTotal FROM shopcart";
						$res = mysqli_query($conn, $sql);
					
						$row = mysqli_fetch_array($res);

						 ?>
					<h4>Grand Total: <?= $row['grandTotal'] ?></h4>
					<h5 class="text-end" id="gtotal"></h5>
					<button class="btn btn-info btn-block text-decoration-none"><a href="order.php" class="text-decoration-none text-danger fw-bold">Order Now</a></button>
					  <?php 
						  if (isset($_SESSION['cart'])&& count($_SESSION['cart'])>0) 
						  {
						  ?> 
					<form>
							<br>
						<button class="btn btn-info btn-block text-decoration-none"><a href="order.php" class="text-decoration-none text-danger fw-bold">Order Now</a></button>
						
					</form>
				 	<?php
				}
				?> 
				</div>
			</div>
		</div>
	</div>

	<!-- <script>
		var gt = 0;
		var iprice=document.getElementsByClassName('iprice');
		var iquantity=document.getElementsByClassName('iquantity');
		var itotal=document.getElementsByClassName('itotal');
		var gtotal=document.getElementById('gtotal');

		function subTotal()
		{

			gt = 0;
			for(i=0;i<iprice.length;i++)
			{
				itotal[i].innerText = (iprice[i].value)*(iquantity[i].value);

				gt=gt+(iprice[i].value)*(iquantity[i].value);
			}
			gtotal.innerText=gt;
		}

		subTotal();

	</script>
 -->
<?php 
include 'footer.php';
?>