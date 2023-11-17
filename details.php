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
		$id = $_GET['id'];

		$selectquery = "SELECT * FROM category WHERE id = $id";
		$query = mysqli_query($conn,$selectquery);
		$check = mysqli_num_rows($query)>0;

		if($check)
		{
			while($row = mysqli_fetch_array($query))
			{
				?>
				<div class="col-12 col-md-6 col-sm-6 col-lg-12 mt-5">
 					<form action="cartProcess.php" method="POST" enctype="multipart/form-data" name="query">
 						<div class="card mb-3 border-0" style="max-width: 50%;">
							  <div class="row g-0">
							    <div class="col-md-6">
							      <img src="<?php echo $row['photo']; ?>" class="img-fluid rounded-start" alt="...">
							   	 </div>
							    <div class="col-md-6">
							      <div class="card-body">
							        <h5 class="card-title"><?php echo $row['product']; ?></h5>
							        <p class="card-text"><?php echo $row['price']; ?></p>
							        <p class="card-text mb-5"><?php echo $row['details']; ?></p>

							        <!-- <button type="submit" name="Add_To_Cart" class="btn btn-info width">Add to Cart</button>
							        <br>
							        <br>

							        <button class="btn btn-info btn-block text-decoration-none position-absolute bottom-0 end-50%"><a href="buy.php?id=<?= $row['id'] ?>" class="text-decoration-none text-danger fw-bold">Buy Now</a></button> -->
							        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button></p>
							        
					    			<button class="btn btn-info btn-block text-decoration-none"><a href="buy.php?id=<?= $row['id'] ?>" class="text-decoration-none text-danger fw-bold">Buy Now</a></button>

									<input type="hidden" name="Item_Name" value="<?php echo $row['product']; ?>">
									<input type="hidden" name="Price" value="<?php echo $row['price']; ?>">
							        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
							      </div>
							    </div>
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