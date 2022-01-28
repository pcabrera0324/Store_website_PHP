<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
 

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Account</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to #TheSneakerStore.</h1>
    
    
  <h2>
      Order Summary 
      <b>
          <?php
          
          $searchtype=$_SESSION["username"];
  



@ $db = new mysqli('localhost', 'cabrerp1_project', 'Montclair123', 'cabrerp1_project');


 if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }

  
  $query ="SELECT orders.id, orders.email, order_details.product_id,order_details.product_name,order_details.total_price
FROM orders 
INNER JOIN order_details ON orders.id=order_details.order_id
WHERE orders.email = '$searchtype'";

 
  $result = $db->query($query);

  $num_results = $result->num_rows;

  echo "<p> Number of Order's #".$num_results."</p>";

  for ($i=0; $i <$num_results; $i++) {
     $row = $result->fetch_assoc();
     echo "<p><strong>".($i+1).". email: ";
     echo htmlspecialchars(stripslashes($row['email']));
     echo "</strong><br />id: ";
     echo stripslashes($row['id']);
     echo "<br />product_id: ";
     echo stripslashes($row['product_id']);
     echo "<br />product_name: ";
     echo stripslashes($row['product_name']);
     echo "<br />total_price: ";
     echo stripslashes($row['total_price']);
     echo "</p>";
  }
  $result->free();
  $db->close();
          
          
          ?>
          
      </b>
      
      
  </h2>
   
    
    
    
    
    
    
    
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
       
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
         <a href="welcome.php" class="btn btn-warning">Home Page</a>
    </p>
    
    
</body>
</html>