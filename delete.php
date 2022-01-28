<?php

include "dbConn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string




$link = mysqli_connect("localhost", "cabrerp1_project", "Montclair123", "cabrerp1_project");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "DELETE FROM users
    where id='$id'";

if(mysqli_query($link, $sql)){
   header("location:employeehome.php");
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);



?>
