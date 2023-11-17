<?php
include('header.php');
?>
    <section class="Material-contact-section section-padding section-dark">
      <div class="container">
          <div class="row">
              <!-- Section Titile -->
              <div class="col-md-4">
                  <h2 class="section-title">Love to Hear From You</h1>
              </div>
          </div>
          <div class="row">
              <!-- Section Titile -->
              <div class="col-md-4 mt-3 form-line">
                <p>The term “e-commerce” simply means the sale of goods or services on the internet. In its most basic form, e-commerce involves electronically transferring funds and data between 2 or more parties. This form of business has evolved quite a bit since its beginnings in the electronic data interchange of the 1960s and the inception of online shopping in the 1990s.</p>

                <div class="find-widget fs-5">
                 Company:  <a href="#" class="text-decoration-none text-warning">Best Buy</a>
                </div>
                <div class="find-widget fs-5">
                 Address: <a href="#" class="text-decoration-none text-warning">Kathmandu</a>
                </div>
                <div class="find-widget fs-5">
                  Phone:  <a href="#" class="text-decoration-none text-warning">+9770123456</a>
                </div>
              </div>
              <!-- contact form -->
              <div class="col-md-8">
							<form class="border shadow p-3 rounded" action="processFeedback.php" method="POST" style="width: 450px;" onsubmit="return validation()">
            <div class="mb-3">
                <label>Name:</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your Name" required>
             </div>
              <div class="mb-3">
                <label>mobile number:</label>
                <input type="number" name="mobile"  class="form-control" placeholder="Enter your mobile number" id="abc" required>
              </div>
              <div class="mb-3">
							  <label class="form-label mb-1">Message</label>
							  <textarea class="form-control" name="message" rows="3" required></textarea>
							</div>
              <div class="mb-3">
               <button name="submit" class="submits" class="btn btn-success bg-warning fs-4 text-white w-100">Send</button>
             </div>
          </form>
             </div>
          </div>
      </div>
    </section>
  
<footer>
	© BestBuy.com, all rights reserved
</footer>
<script>
	function validation()
	{
	// var a = document.getElementById('abc').value;
	// if(a.value<10)
	// {
	// 	alert('number must be 10 digits');
	// }
	// alert('form clicked');
	// return false;
}

</script>

<?php
include('footer.php');
?>