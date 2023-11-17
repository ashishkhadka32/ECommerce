
<?php 
include("header.php");

?>
 <div class="container">
 	  <?php
  		$serverName = "localhost";
		$user = "root";
		$pass = "";
		$dbname = "product";

		$conn = mysqli_connect($serverName,$user,$pass,$dbname);

		// $id=isset($_GET['id']) ? $_GET['id'] : '';
		$id = $_GET['id'];

		$selectquery = "SELECT * FROM category WHERE id = $id";
		$result = mysqli_query($conn,$selectquery);
		if($result)
		$row = mysqli_fetch_assoc($result);

				?>
		<h3>Pay With</h3>
              <ul class="list-group">
                
                <li class="list-group-item">
                  <form action="https://uat.esewa.com.np/epay/main" method="POST">
                    <input value="<?= $row['price']; ?>" name="tAmt" type="hidden">
                    <input value="<?= $row['price']; ?>" name="amt" type="hidden">
                    <input value="0" name="txAmt" type="hidden">
                    <input value="0" name="psc" type="hidden">
                    <input value="0" name="pdc" type="hidden">
                    <input value="EPAYTEST" name="scd" type="hidden">
                    <input value="ee2c3ca1-696b-4cc5-a6be-2c40d929d453" name="pid" type="hidden">
                    <input value="http://merchant.com.np/page/esewa_payment_success?q=su" type="hidden" name="su">
                    <input value="http://merchant.com.np/page/esewa_payment_failed?q=fu" type="hidden" name="fu">
                    <input type="image" src="image/esewa.png" name="pay_mode" value="paid">
                    </li>
                    <!-- <li class="list-group-item"><input type="image" src="image/fonepay.png"></li>
                    <li class="list-group-item"><input type="image" src="image/khalti.png"></li>
                    <li class="list-group-item"><input type="image" src="image/connectips.png"></li>
                    <li class="list-group-item"><input type="image" src="image/hbl.png"></li> -->
                  </form>
                  </ul>
 			</div>
 	
<?php
include 'footer.php';
?>