<?php
include "adminHeader.php";
?>
<div class="cardtop">
<div class="row">
<div class="card text-white bg-danger mb-3 col-md-3 mt-3" style="max-width: 300px">
  <div class="card-header">Total Products</div>
  <div class="card-body">
  	<h2>
    	<?php
    $count = 0;

                include 'include/dbConnection.php';

                $sql = "SELECT * FROM category";

                $sql_query = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($sql_query)) {

                    $count++;

                }

                echo $count;
                ?></h2>
  </div>
</div>
<div class="card text-white bg-success mb-3 col-md-3 ms-2 mt-3" style="max-width: 300px">
  <div class="card-header">Total Orders</div>
  <div class="card-body">
  	<h2>
  	<?php
    $count = 0;

                include 'include/dbConnection.php';

                $sql = "SELECT * FROM order_manager";

                $sql_query = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($sql_query)) {

                    $count++;

                }

                echo $count;
                ?></h2>
  </div>
</div>
<div class="card text-white bg-info mb-3 col-md-3 ms-2 mt-3" style="max-width: 300px">
  <div class="card-header">Total Users</div>
  <div class="card-body">
  	<h2>
    	<?php
    $count = 0;

                include 'include/dbConnection.php';

                $sql = "SELECT * FROM register";

                $sql_query = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($sql_query)) {

                    $count++;

                }

                echo $count;
                ?></h2>
  </div>
</div>
<div class="card text-white bg-dark mb-3 col-md-3 ms-3 mt-3" style="max-width: 300px">
  <div class="card-header">Total Feedback</div>
  <div class="card-body">
  	<h2>
    	<?php
    $count = 0;

                include 'include/dbConnection.php';

                $sql = "SELECT * FROM feedback";

                $sql_query = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($sql_query)) {

                    $count++;

                }

                echo $count;
                ?></h2>
  </div>
</div>
</div>
</div>
<?php 
include "adminFooter.php";
 ?>