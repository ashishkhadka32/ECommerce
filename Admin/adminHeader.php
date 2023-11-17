<?php
session_start();

include('include/dbConnection.php');
if (!isset($_SESSION['name'])) {
  header("location: login.php");
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="./css/style.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <title>admin</title>
</head>

<body>
  <div class="header">
    <nav id="navbars" class="navbar navbar-expand-lg navbar-dark" style="background-color: teal;">
      <a class="navbar-brand mx-auto" href="#">Admin Panel</a>
      <form>
        <button class="btn btn-success px-3 mx-3" type="submit"><a href="logout.php" class=" text-decoration-none" style="color: white;">LogOut</a></button>
      </form>
    </nav>
    <!-- <i class="fa fa-bars fa-lg menubar" onclick="showMenu()"></i> -->
  </div>
  <div class="left-nav-s">
    <nav>
      <ul>
        <li><a href="dashboard.php"><i class="fa fa-dashboard fa-2x"></i></a></li>
   
        <li><a href="addProduct.php"><i class="fa fa-list-alt fa-2x"></i></a></li>
        
        <li><a href="displayProduct.php"><i class="fa fa-first-order fa-2x"></i></a></li>
     
        <li><a href="orderDetails.php"><i class="fa fa-book fa-2x"></i></a></li>
        
        <li><a href="feedback.php"><i class="fa fa-user fa-2x"></i></a></li>
      

      </ul>
    </nav>
  </div>

  <div class="left-nav" id="nav-left">

    <nav>
      <ul>
        
        <li><a href="dashboard.php"><i class="fa fa-home fa-lg space"></i> Dashboard</a></li>
        <div class="line"></div>
        <li><a href="addProduct.php"><i class="fa fa-list-alt fa-lg space"></i> Add Products</a></li>
        <div class="line"></div>
        <li><a href="displayProduct.php"><i class="fa fa-first-order fa-lg space"></i> Display Products</a></li>
        <div class="line"></div>
        <li><a href="orderDetails.php"><i class="fa fa-book fa-lg space"></i> Orders</a></li>
        <div class="line"></div>
        <li><a href="feedback.php"><i class="fa fa-comments space"></i> Feedback</a></li>
      </ul>
    </nav>
  </div>

  <!--Contains the main content
                    of the webpage-->
  <div class="col-10" style="text-align: justify;">