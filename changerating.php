<?php
 



 $db_connection = new mysqli('stardock.cs.virginia.edu', 'cs4720lca8de', 'LPswJ#12', 'cs4720lca8de');
  if (mysqli_connect_errno()) {
      echo "Connection Error!";
      return;
  }


$filmname4 = $_GET['filmname4'];
$rating4 = $_GET['rating4'];



  $stmt = $db_connection->stmt_init();

if($stmt->prepare("UPDATE FilmsOwned SET Rating = ? WHERE Film = ? ")) {
      $stmt->bind_param("ds", $rating4, $filmname4);
      $stmt->execute();
      echo "Success!";
}





?>