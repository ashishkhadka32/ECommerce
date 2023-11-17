<?php
  session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style type="text/css">
      *
      {
        box-sizing: border-box;
      }
      .img-fluid
      {
        height: 100%;
      }
    </style>


    <title>form</title>
  </head>
  <body>
    <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">

          <form class=" border shadow p-3 rounded" action="processLogin.php" method="POST" style="width: 450px;">
            <p class="text-warning fs-3 fw-bold my-3 text-center">Login Form</p>
            <div class="mb-3">
                <label>E-mail:</label>
                <input type="email" name="email" class="form-control" placeholder="E-mail" required>
              </div>
              <div class="mb-3">
                <label>Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
              </div>
              <p style="text-align: center; color: red;"><?= isset($_SESSION['msg']) ? $_SESSION['msg'] : ''; unset($_SESSION['msg']);?></p>
              <div class="mb-3">
               <button name="submit" class="w-100 bg-warning fs-4 text-white"><a href="login.php"></a>Login</button>
             </div>
                <div class="mb-3">
               <h5 class="text-danger">Do you have account?<a href="register.php" class="px-2">Sign Up</a></h5>
             </div>
          </form>
        </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>