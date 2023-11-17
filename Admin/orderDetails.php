<?php
include("adminHeader.php");
?>
 <div class="container">
 	<div class="row">
 		<div class="col-xs-12">
 			<div class="table-responsive">
	 			<table class=" mt-4 table table-bordered text-center table-dark">
				  <thead>
				    <tr>
				      <th scope="col">Order_Id</th>
				      <th scope="col">Customer_Name</th>
				      <th scope="col">Contact_No</th>
				      <th scope="col">Address</th>
				     	<th scope="col">Action</th>
				      <!-- <th scope="col">Pay_Mode</th> -->
				      <!-- <th scope="col">Orders</th>
				      <th scope="col">Action</th> -->
				    </tr>
				  </thead>
	  			<tbody>
	  				<?php
	  				$conn = mysqli_connect('localhost','root', '', 'product');
	  				$sql = "SELECT * FROM `order_manager`";

	  				$res = mysqli_query($conn, $sql);
	  				$count=1;
	  				while($row = mysqli_fetch_assoc($res))
	  				{
	  					?>
		  				<tr>
							<td> <?php echo $count++ ?></td>
							<td> <?php echo $row['Full_Name'] ?></td>
							<td> <?php echo $row['Contact'] ?></td>
							<td> <?php echo $row['Address'] ?></td>
							
							<td>
								<a href="deleteOrder.php?Order_Id=<?= $row['Order_Id'] ?>" onclick="return confirm('Are You Sure?');"><input type="submit" name="Delete" value="Delete" class="btn btn-success"></a>
							</td>
						</tr>

	  					
		  			<?php 
	  				}

	  				?>

	  			</tbody>
	  		</table>
  			</div>
  		</div>		
 	</div>
 </div>
<?php
include("adminFooter.php");
?>
<!-- 	<td>
		  					<table class='table text-center table-bordered  table-dark'>
							  <thead>
							    <tr>
							      <th scope='col'>Item_Name</th>
							      <th scope='col'>Price</th>
							      <th scope='col'>Quantity</th>
							    </tr>
							  </thead>
							  <tbody>
							  ";
							  $order_query = "SELECT * FROM `shopcart`";
							  $order_res = mysqli_query($conn, $order_query);
							  while($order_fetch = mysqli_fetch_assoc($order_res))
							  {
							  	echo"
							  	<tr>
							  		<td>$order_fetch[product_name]</td>
							  		<td>$order_fetch[product_price]</td>
							  		<td>1</td>
							  	</tr>
							  	";
							  }
							  
							  
							  echo"
							  	</tbody>
							  </table>
		  					</td>
		  					
		  				</tr> -->