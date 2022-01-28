<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>TheSneakerStore--PRODUCTS</h2>

<table border="2">
  <tr>
    <td>id</td>
    <td>ProductName</td>
    <td>ProductSlug</td>
    <td>ShortDescription</td>
    <td>FullDescription</td>
    <td>Price</td>
    <td>CreatedAT</td>
    <td>LastTimeUPDATED</td>
 
    <td>Edit</td>
    <td>Delete</td>
  </tr>

<?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"SELECT *
FROM products "); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['product_name']; ?></td>
    <td><?php echo $data['product_slug']; ?></td>
    <td><?php echo $data['short_description']; ?></td>
    <td><?php echo $data['full_description']; ?></td>
    <td><?php echo $data['price']; ?></td>
    <td><?php echo $data['created_at']; ?></td>
    <td><?php echo $data['updated_at']; ?></td>
    
    <td><a href="productedit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="deleteproduct.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>

<p>
         <a href="employeehome.php" class="btn btn-warning">Home Page</a>
         <a href="newproduct.php" class="btn btn-warning">Add a product</a>
    </p>
    
</body>
</html>