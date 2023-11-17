<?php
 session_start(); 
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <title>E-Commerce</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      // Submit the form when the search button is clicked
      // $('#search_area').submit(function(event) {
      // //Prevent the form from being submitted
      // event.preventDefault();
      $("#query").on("input",function(){
   
        // Get the search query
        //var query = $('#query').val();
       var query = $(this).val();

        // Send an AJAX request to the search script
        $.get('search.php', {
          query: query
        }, function(data) {
          // Update the results div with the search results
          $('#search-result').html(data);
          if (query != "") {
            $('#search-result').show();
          } else {
            $('#search-result').hide();
          }
          
        });
      });
    });
  </script>
  <style type="text/css">
    #search-result {
      position: absolute;
      top: 0: ;
      margin-top: 4.5%;
      height: 250px;
      width: 510px;
      top: 0%;
      
      z-index: 1;
      border: none;
      border-radius: 6px;
      padding: 20px;

      /*//box-shadow:2px 2px 6px rgba(0, 0, 0, 0.100);*/

    }
  </style>
</head>
<body>
    <div class="menu_bar">
        <div class="continer_fluid">
            <div class="container">
                
                <div class="row">
                      
                      <div class="navbar navbar-expand-md" id="menu_box">
                        <div class="col-2 navbar-brand" id="company_logo">
                        <div id="logo_left">
                          <a href="admin/login.php" class="text-decoration-none">
                        <h3><span id="fristletter">B</span><span id="secondletter">est</span><span id="fristletter">B</span><span id="secondletter">uy</span></h3>
                        </a>
                       </div>
                    </div> 
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <i class="fa fa-list-ul navbar-toggler-icon"></i>
                    </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav" id="menu">
                               <li class="nav-item">
                                <a class="nav-link active" href="index.php"><i class="fa fa-home"></i>Home</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link active" href="about.php"><i class="fa fa-info"></i>About Us</a>
                               </li>

                              <li class="nav-item">
                                <a class="nav-link active" href="contact.php"><i class="fa fa-phone"></i>Contact Us</a>
                              </li>
                            
                               <li class="nav-item">
                                <a class="nav-link active" href="login.php"><i class="fa fa-user"></i>Login</a>
                              </li>

                              <li class="nav-item">
                               <?php
                               $conn = mysqli_connect('localhost','root', '', 'product');
                                 $sql = "SELECT * FROM shopcart";
                                  $res = mysqli_query($conn, $sql);
                                  $row = mysqli_num_rows($res);

                                  ?>
                                  <a class="nav-link" href="myCart.php"><i class="fa fa-shopping-cart"></i>Cart(<?php echo $row; ?>)</a>
                              </li>
                              
                         </ul>
                      </div>
                    </div>
                   </div>
                </div>
            </div>
    </div>
    <div class="logo">
            <div class="container" id="logo_box">
                <div class="row" id="logo_area">
                    <div class="col-7" id="search">
                       <form action="search.php" method="Post" id="search_area">
                           <input type="text" name="query" id="query" placeholder="search" >
                           <button type="submit" id="button"><i class="fa fa-search"></i></button>
                       </form>
                       <div id="search-result"></div>
                       
                    </div>
                    <div class="col-5" id="logo_right">
                        <div class="dropdown mt-2 float-end">
                          <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-user fa-2x text-dark" aria-hidden="true"></i>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <?php 
                            if(isset($_SESSION['email']))
                            {
                                ?>
                               <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                               <?php 
                            }
                            ?>
                            
                            <li><a class="dropdown-item" href="admin/login.php">Admin Login</a></li>
                          </ul>
                        </div>
                    </div>
   
                </div>
            </div>
        </div>