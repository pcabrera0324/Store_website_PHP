<?php

include "dbConn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"select * from users where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $fullname = $_POST['username'];
    
	
    $edit = mysqli_query($db,"update users set username='$fullname'
    where id='$id'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:all_records.php"); // redirects to all records page
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
  <input type="text" name="username" value="<?php echo $data['username'] ?>" placeholder="Enter New Email" Required>
  <a href="employeehome.php" class="btn btn-warning">Home Page</a>
  <input type="submit" name="update" value="Update">
</form>