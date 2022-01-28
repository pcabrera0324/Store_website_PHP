<?php

include "dbConn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string



$qry = mysqli_query($db,"select *
from products
where order_details.order_id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data



if(isset($_POST['update'])) // when click on Update button
{
   
    $fullname = $_POST['product_name'];
    
	
    $edit = mysqli_query($db,"UPDATE products SET product_name = '$fullname' ");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:productedit.php"); // redirects to all records page
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
  <input type="text" name="product_name" value="<?php echo $data['product_name'] ?>" placeholder="Enter Total Price" Required>
  <p>
         <a href="employeehome.php" class="btn btn-warning">Home Page</a>
    </p>
  <input type="submit" name="update" value="Update">
</form>