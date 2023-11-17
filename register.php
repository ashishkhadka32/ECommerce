<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>form</title>
  </head>
  <body>
          <div class="container d-flex justify-content-center align-items-center"
           style="min-height: 100vh">
          <form class="border shadow p-3 rounded" action="processRegister.php" method="POST" style="width: 450px;">
            <p class="text-warning fs-3 fw-bold my-3 text-center">Registration Form</p>
            <div class="mb-3">
                <label>Username:</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your Username" required>
              </div>
            <div class="mb-3">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your E-mail" required>
              </div>
              <div class="mb-3">
                <label>Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Enter your Password" required>
              </div>
              <div class="mb-3">
                <label>Confirm Password:</label>
                <input type="password" name="cpass" class="form-control" placeholder="Confirm Password" required>
              </div>
              <div class="mb-3">
               <button name="submit" class="btn btn-success bg-warning fs-4 text-white w-100">Register</button>
             </div>
                <div class="mb-3">
               <h5 class="text-danger">Already have an account?<a href="login.php" class=" px-2">Sign in</a></h5>
             </div>
          </form>
        </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>