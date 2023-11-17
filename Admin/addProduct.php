<?php 
include 'adminHeader.php';
?>
<div class="container">
	<form action="processAddProduct.php" method="POST" enctype="multipart/form-data">
	  <div class="mb-3 mt-3">
	    <label class="form-label mb-1">Product Name</label>
	    <input type="text" name="product" class="form-control" required>
	  </div>
	  <div class="mb-3">
	    <label class="form-label mb-1">Price</label>
	    <input type="number" min="1" name="price" class="form-control" required>
	  </div>
	    <div class="mb-3">
	    <label class="form-label mb-1">Company Name</label>
	    <input type="text" name="company" class="form-control" required>
	  </div>
	    <label class="form-label mb-1">Category</label>
	 <div class="input-group mb-3">
	  <select class="form-select" name="option" required>
	    <option selected>Choose...</option>
	    <option value="mobile">Mobile</option>
	    <option value="laptop">Laptop</option>
	    <option value="television">Television</option>
	  </select>
	</div>
	<div class="mb-3">
	  <label class="form-label mb-1">Details</label>
	  <textarea class="form-control" name="detail" rows="3" required></textarea>
	</div>
	<div class="mb-3">
		<input type="file" name="photo" class="form-control" required>
	</div>
	  <input type="submit" class="btn btn-primary" name="submit" value="submit">
	</form>
</div>

<?php 
include 'adminFooter.php';
?>