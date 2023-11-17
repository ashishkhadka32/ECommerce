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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>form</title>
    <style type="text/css">
      form
      {
        background: darkseagreen;
      }
    </style>
  </head>
  <body>
    <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">

          <form class=" border shadow p-3 rounded" action="processLogin.php" method="POST" style="width: 450px;">
            <p class="text-dark fs-3 fw-bold my-3 text-center">Admin Login</p>
            <div class="form-floating mb-3">
              <input type="email" name="name" class="form-control" id="floatingInput" placeholder="Email" required>
              <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" name="password" class="form-control" id="floatingInput" placeholder="Password" required>
              <label for="floatingInput">Password</label>
            </div>
              <p style="text-align: center; color: red; font-weight: bolder; font-size: 20px;"><?= isset($_SESSION['msg']) ? $_SESSION['msg'] : ''; unset($_SESSION['msg']);?></p>
              <div class="mb-3">
               <button name="submit" class="w-100 bg-warning fs-4 text-white border border-danger"><a href="login.php"></a>Login</button>
             </div>
          </form>
        </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>