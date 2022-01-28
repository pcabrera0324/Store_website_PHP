<?php

include "dbConn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string



$qry = mysqli_query($db,"select orders.id,orders.email,order_details.product_id,order_details.product_name,order_details.total_price
from orders,order_details
where orders.id='$id' and order_details.order_id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data



if(isset($_POST['update'])) // when click on Update button
{
   
    $fullname = $_POST['total_price'];
    
	
    $edit = mysqli_query($db,"UPDATE order_details SET total_price = '$fullname' WHERE order_id='$id'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:orders.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="total_price" value="<?php echo $data['total_price'] ?>" placeholder="Enter Total Price" Required>
  <p>
         <a href="employeehome.php" class="btn btn-warning">Home Page</a>
    </p>
  <input type="submit" name="update" value="Update">
</form>