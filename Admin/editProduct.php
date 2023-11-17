<?php
	include 'adminHeader.php';
	$serverName = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "product";

	$conn = mysqli_connect($serverName,$user,$pass,$dbname);
	$id = $_GET['id'];
	$sql = "SELECT * FROM category WHERE id = $id";
	$result = mysqli_query($conn,$sql);
	while($res=mysqli_fetch_array($result))
	{
		$product = $res['product'];
		$price = $res['price'];
		$company = $res['company'];
		$option = $res['category'];
		// $details = $res['detail'];
		$file = $res['photo'];

	}


?>
<?php

	if(isset($_POST['update']))
	{
		$id = $_POST['id'];
		$product = $_POST['product'];
		$price = $_POST['price'];
		$company = $_POST['company'];
		$option = $_POST['option'];
		// $detail = $_POST['detail'];
		$file = $_FILES['photo'];

		$query = "UPDATE category SET product='$product',price='$price',company='$company',category='$option' WHERE id=$id";
		$result = mysqli_query($conn,$query);
		if($result)
		{
			header("location: displayProduct.php");
		}
		else
		{
			echo "data cannot be update";
		}
	}
	?>

	<div class="container">
	<form action="" method="POST" enctype="multipart/form-data">
	  <div class="mb-3 mt-3">
	    <label class="form-label">Product Name</label>
	    <input type="text" name="product" class="form-control" value="<?= $product; ?>">
	  </div>
	  <div class="mb-3">
	    <label class="form-label">Price</label>
	    <input type="text" name="price" class="form-control" value="<?= $price; ?>">
	  </div>
	    <div class="mb-3">
	    <label class="form-label">Company Name</label>
	    <input type="text" name="company" class="form-control" value="<?= $company; ?>">
	  </div>
	    <label class="form-label">Category</label>
	 <div class="input-group mb-3">
	  <select class="form-select" name="option" value="<?= $category; ?>">
	    <option selected>Choose...</option>
	    <option value="mobile">Mobile</option>
	    <option value="laptop">Laptop</option>
	    <option value="television">Television</option>
	  </select>
	</div>
	<!-- <div class="mb-3">
	  <label for="exampleFormControlTextarea1" class="form-label mb-1">Details</label>
	  <textarea class="form-control" name="detail" rows="3"></textarea>
	</div> -->
	<div class="mb-3">
		<input type="file" name="photo" class="form-control"  value="<?= $photo; ?>">
	</div>
	<div><input type="hidden" name="id" value=<?= $_GET['id']; ?>></div>
	  <input type="submit" class="btn btn-primary" name="update" value="update">
	</form>
</div>
<?php
	include 'adminFooter.php';
?>