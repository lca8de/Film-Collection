<?php



  $db_connection = new mysqli('stardock.cs.virginia.edu', 'cs4720lca8de', 'LPswJ#12', 'cs4720lca8de');
  if (mysqli_connect_errno()) {
      echo "Connection Error!";
      return;
  }


$filmwish = $_GET['filmwish'];
$price = $_GET['price'];
$desire = $_GET['desire'];



  $stmt = $db_connection->stmt_init();



//  $query = "INSERT INTO FilmsOwned(Film, Genre, Rating)  VALUES(?, ?, ?)";
 
  //	$stmt->prepare($query);


if($stmt->prepare("INSERT INTO WishList(Film, Price, Desire)  VALUES(?, ?, ?)")) {
      $stmt->bind_param("sdd", $filmwish, $price, $desire);
      $stmt->execute();
      echo "Success!";
}

	?>