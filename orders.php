<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Customer Order's</h2>

<table border="2">
  <tr>
    <td>id</td>
    <td>Email</td>
    <td>ProductID</td>
    <td>productName</td>
    <td>Total</td>
 
    <td>Edit</td>
    <td>Delete</td>
  </tr>

<?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"SELECT orders.id, orders.email, order_details.product_id,order_details.product_name,order_details.total_price
FROM orders
INNER JOIN order_details ON orders.id=order_details.order_id;"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['product_id']; ?></td>
    <td><?php echo $data['product_name']; ?></td>
    <td><?php echo $data['total_price']; ?></td>
    
    <td><a href="ordersedit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="deleteorder.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>

<p>
         <a href="employeehome.php" class="btn btn-warning">Home Page</a>
    </p>
    
</body>
</html>