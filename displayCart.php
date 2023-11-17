<?php
	include 'header.php';
?>
<div class="container">
	<div class="row">
		<div class="table-responsive">
			<table class=" mt-4 table table-bordered  table-dark" id="tables">
			  <thead>
			    <tr>
			      <th scope="col">Id</th>
			      <th scope="col">Product Name</th>
			      <th scope="col">Price</th>
			      <!-- <th scope="col">company</th>
			      <th scope="col">category</th>
			      <th scope="col">Pics</th> -->
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
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
							<td> <?php echo $row['product_name'] ?></td>
							<td> <?php echo $row['product_price'] ?></td>
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
	</div>

</div>

<?php 
	include 'footer.php';
?>