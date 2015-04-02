<?php




  $db_connection = new mysqli('stardock.cs.virginia.edu', 'cs4720lca8de', 'LPswJ#12', 'cs4720lca8de');
  if (mysqli_connect_errno()) {
      echo "Connection Error!";
      return;
  }





$stmt = $db_connection->stmt_init(); 

$result = mysqli_query("SELECT * FROM FilmsOwned");
$num_rows = mysqli_num_rows($result);


echo $num_rows;
echo "hi";



  ?>