<?php
include('connexion.php');

// Check connection
if (isset($_POST['publier'])) {

//On récupère les valeurs entrées par l'utilisateur :
@$titrePublication=$_POST["titrePublication"]; 
@$type=$_POST["type"]; 
$texte=$_POST["texte"];
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$check = getimagesize($_FILES["photo"]["tmp_name"]);
  if($check !== false) {
    echo "c'est bien une image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "le fichier est different d'une image.";
    $uploadOk = 0;
  }
  // renomer l'image
$temp = explode(".", $_FILES["photo"]["name"]);
$newfilename = round(microtime(true)) . '.' .end($temp);
$finaldestination = $target_dir .$newfilename;

    if(move_uploaded_file($_FILES["photo"]["tmp_name"],"" . $finaldestination)) {
$sql = "INSERT INTO  `publication`(titrePublication,type,photo,texte) VALUES('$titrePublication','$type','$finaldestination','$texte')";
if(mysqli_multi_query($conn, $sql))  {
 header('location:accueil_page.php');

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
}

?>