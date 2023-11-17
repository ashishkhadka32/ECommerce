<?php include("header.php");

?>

 <div class="container">
 	<div class="row">
 	  <?php
  		$serverName = "localhost";
		$user = "root";
		$pass = "";
		$dbname = "product";

		$conn = mysqli_connect($serverName,$user,$pass,$dbname);

		$selectquery = "SELECT * FROM category";
		$query = mysqli_query($conn,$selectquery);
		
		$check_category = mysqli_num_rows($query)>0;

		if($check_category)
		{
			while($row = mysqli_fetch_array($query))
			{
				?>
				<div class="col-12 col-md-6 col-sm-6 col-lg-3 mt-5">
 					<form action="cartProcess.php" method="POST" enctype="multipart/form-data">
 						<div class="card">
 							<!-- <input type="number" name="id" value="<?= $row['id']; ?>" id="" hidden></input> -->
					 		<a href="details.php?id=<?= $row['id'] ?>"> <img src="<?php echo $row['photo']; ?>" class="card-img-top" alt="..." height="250px" width="200px"></a>
					 		<div class="card-body text-center">
					   		 <h5 class="card-title"><?php echo $row['product']; ?></h5>
					   		 <input type="hidden" name="Item_Name" value="<?php echo $row['product']; ?>">
					    		<p class="card-text">RS.&nbsp;<?php echo $row['price']; ?></p>
					    		<input type="hidden" name="Price" value="<?php echo $row['price']; ?>">
					    		<button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button></p>
					    		<button class="btn btn-info btn-block text-decoration-none"><a href="buy.php?id=<?= $row['id'] ?>" class="text-decoration-none text-danger fw-bold">Buy Now</a></button>
					    		
					    		

					  		</div>
					</div>
				</form>
 			</div>

				<?php
			}
		}
		else
		{
			echo "not found";
		}
		?>
 	
<?php
include 'footer.php';
?>