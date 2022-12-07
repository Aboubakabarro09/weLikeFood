<?php 
$servername = "localhost";
$username = "root";
$password = "";
$bd = "principal";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$bd);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check connection
if (isset($_POST['publier'])) {
	$texte=$_POST["texte"];
}


 ?>