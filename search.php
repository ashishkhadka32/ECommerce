
<?php
    $serverName = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "product";

    $conn = mysqli_connect($serverName,$user,$pass,$dbname);



// Check if a search query was submitted
if (isset($_GET['query'])) {

  $query = $conn->real_escape_string($_GET['query']);
  if(!empty($query))
{
 
  // Search the products table for matching products
  $sql = "SELECT * FROM category WHERE product LIKE '%$query%'";
  $result = $conn->query($sql);

  // Display the results
    while ($row = $result->fetch_assoc()) {
      echo "<a style='text-decoration:none; color: black;' href='details.php?id=" . $row['id'] . "'><p>" . $row['product'] . "</p></a>";
      // echo "<h2>" . $row['product_quantity'] . "</h2>";
      // echo "<p>" . $row['description'] . "</p>";
     // echo "<p>$" . $row['price'] . "</p>";
    }
  } 
}
else
{
  echo "";
}
?>