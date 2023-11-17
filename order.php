<?php
include("header.php");
?>

<div class="container">
      <div class="row">
        <div class="col-md-6">
          <form method="POST" action="purchase.php">

            <div class="col-md-6 bg-dark px-2">
                  <p class="text-white fs-3 fw-bold my-3 text-center">Order</p>
                    <div class="mb-3">
                        <label class="text-white">Full Name:</label>
                        <input type="text" name="full_name" class="form-control" placeholder="Full Name">
                      </div>
                      <div class="mb-3">
                        <label class="text-white">Contact Number:</label>
                        <input type="text" name="contact" class="form-control" placeholder="Contact Number">
                      </div>
                      <div class="mb-3">
                        <label class="text-white">Address:</label>
                        <input type="text" name="address" class="form-control" placeholder="Address">
                      </div>
                  <!--     <div class="form-check mb-3">
                          <input class="form-check-input" name="pay_mode" type="radio" value="COD" name="flexRadioDefault" id="flexRadioDefault1">
                          <label class="form-check-label text-white" for="flexRadioDefault1">
                          Cash on Delivery
                          </label>
                      </div> -->
                      <div>
                        <button class="btn btn-info btn-block text-decoration-none mb-3" name="pay_mode" value="paid"><a href="onlinePayment.php" class="text-decoration-none text-danger fw-bold">payment</a></button>
                      </div>
                      <button class="btn btn-primary btn-block mb-2" name="purchase">Place Order</button>

             </div>
          </form>
      </div>
       
    </div>
  </div>

        <?php
        include("footer.php");

        ?>
