<?php




  $db_connection = new mysqli('stardock.cs.virginia.edu', 'cs4720lca8de', 'LPswJ#12', 'cs4720lca8de');
  if (mysqli_connect_errno()) {
      echo "Connection Error!";
      return;
  }

$title2 = $_GET['title2'];



$stmt = $db_connection->stmt_init();
 


if($stmt->prepare("select Film, Genre, Rating from FilmsOwned where Film = ? order by Rating desc")) {
      $stmt->bind_param("s", $title2);
      $stmt->execute();
      $stmt->bind_result($Film, $Genre, $Rating);
      echo "<table border='1'>";
      echo "<tr><th>Film</th><th>Genre</th><th>Rating</th>";
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