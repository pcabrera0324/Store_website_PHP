<html>
<head>
  <title>#TheSneakerStore</title>
</head>
<body>
<h1>Sneaker Store-  Reviews</h1>


<?php
  // create short variable names
  $searchtype=$_POST['email'];
  $searchterm=trim($_POST['text']);
  echo $searchtype. " ".$searchterm;
  
  

  if (!get_magic_quotes_gpc()){
    $searchtype = addslashes($searchtype);
    $searchterm = addslashes($searchterm);
  }

 @ $db = new mysqli('localhost', 'cabrerp1_project', 'Montclair123', 'cabrerp1_project');
 
 
 

 
   // echo mysqli_connect_errno();
  if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }

  $query = "select * from review";
 // $query ="select * from books";
  $result = $db->query($query);

  $num_results = $result->num_rows;

  echo "<p>Number of Reviews: ".$num_results."</p>";
 

    
  for ($i=0; $i <$num_results; $i++) {
     $row = $result->fetch_assoc();
     echo "<p><strong>".($i+1).". Email: ";
     echo htmlspecialchars(stripslashes($row['email']));
     echo "</strong><br />Review: ";
     echo stripslashes($row['text']);
    
     echo "</p>";
     
     
  }
  

  $result->free();
  $db->close();

?>

 <p>
        
         <a href="employeehome.php" class="btn btn-warning">Home Page</a>
    </p>
    
</body>
</html>
