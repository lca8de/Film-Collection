<?php



  $db_connection = new mysqli('stardock.cs.virginia.edu', 'cs4720lca8de', 'LPswJ#12', 'cs4720lca8de');
  if (mysqli_connect_errno()) {
      echo "Connection Error!";
      return;
  }


$filmname = $_GET['filmname'];
$genre = $_GET['genre'];
$rating = $_GET['rating'];



  $stmt = $db_connection->stmt_init();



//  $query = "INSERT INTO FilmsOwned(Film, Genre, Rating)  VALUES(?, ?, ?)";
 
  //	$stmt->prepare($query);


if($stmt->prepare("INSERT INTO FilmsOwned(Film, Genre, Rating)  VALUES(?, ?, ?)")) {
      $stmt->bind_param("ssd", $filmname, $genre, $rating);
      $stmt->execute();
      echo "Success!";
}

	?>