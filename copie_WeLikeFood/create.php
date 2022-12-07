

<?php
include("connexion.php");

// sql to create table
$sql= "CREATE TABLE publication (
  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  titrePublication text NOT NULL,
  type char(100) NOT NULL,
  photo varchar(100) NOT NULL,
  texte longtext NOT NULL,
  date_publication timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  count_like int(11) NOT NULL,
  count_dislike int(11) NOT NULL
)";

// pour supprimer une table
// $sql="DROP TABLE publication";

if ($conn->query($sql) === TRUE) {
  echo "successfully connect in publication";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>