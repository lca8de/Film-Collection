<?php




  $db_connection = new mysqli('stardock.cs.virginia.edu', 'cs4720lca8de', 'LPswJ#12', 'cs4720lca8de');
  if (mysqli_connect_errno()) {
      echo "Connection Error!";
      return;
  }





$stmt = $db_connection->stmt_init();
 
if($stmt->prepare("select * from FilmsOwned")) {
 $stmt->execute();
 $stmt->bind_result($Film, $Genre, $Rating);
 echo "<table border='1'>";
 echo "<tr><th>Film</th><th>Genre</th><th>Rating</th></tr>";
 while($stmt->fetch()) {
 echo "<tr>";
 echo("<td>" . $Film . "</td>\n");
 echo("<td>" . $Genre . "</td>\n");
 echo("<td>" . $Rating . "</td>\n");
 echo "</tr>";
 }
 echo "</table>";
 }




  ?>