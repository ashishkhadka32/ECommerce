<?php
	include 'adminHeader.php';
?>
<div class="container">
	<div class="row">
		<div class="table-responsive">
			<table class=" mt-4 table table-bordered  table-dark" id="tables">
			  <thead>
			    <tr>
			      <th scope="col">Id</th>
			      <th scope="col">Name</th>
			      <th scope="col">Mobile Number</th>
			      <th scope="col">Message</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  		require 'include/dbConnection.php';

					$selectquery = "SELECT * FROM feedback";
					$query = mysqli_query($conn,$selectquery);
					$count = 1;
					while($row = $query->fetch_assoc())
					{
						?>
						<tr>
							<td> <?php echo $count++ ?></td>
							<td> <?php echo $row['name'] ?></td>
							<td> <?php echo $row['mobile'] ?></td>
							<td> <?php echo $row['message'] ?></td>
							<td>
							<a href="deleteFeedback.php?id=<?= $row['id'] ?>" onclick="return confirm('Are You Sure?');"><input type="submit" name="Delete" value="Delete" class="btn btn-success"></a>
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

<?php 
	include 'adminFooter.php';
?>