<?php




  $db_connection = new mysqli('stardock.cs.virginia.edu', 'cs4720lca8de', 'LPswJ#12', 'cs4720lca8de');
  if (mysqli_connect_errno()) {
      echo "Connection Error!";
      return;
  }





$stmt = $db_connection->stmt_init();
 
if($stmt->prepare("select * from WishList")) {
 $stmt->execute();
 $stmt->bind_result($Film, $Price, $Desire);
 echo "<table border='1'>";
 echo "<tr><th>Film</th><th>Price</th><th>Desire</th></tr>";
 while($stmt->fetch()) {
 echo "<tr>";
 echo("<td>" . $Film . "</td>\n");
 echo("<td>" . $Price . "</td>\n");
 echo("<td>" . $Desire . "</td>\n");
 echo "</tr>";
 }
 echo "</table>";
 }




  ?>