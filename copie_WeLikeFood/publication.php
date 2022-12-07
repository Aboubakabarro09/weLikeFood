<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style2.css"/>
	<title> PUBLICATION</title>
</head>
<body class="general">

 <fieldset >
 	 <h3> Quoi de neuf ?</h3><br>
	<form name="publication" method="post" action="upload.php" enctype="multipart/form-data">

		<h2>Le titre de la publication</h3><br>
		<input type="text" name="titrePublication" maxlength="100" size="80" required>
		<br>
		<br>
		<div>Type de publication
		<select name="type">
		<option disabled></option>	
	 	<option>Restaurant</option>
	 	<option>conseil</option>
	 	<option>recette</option>
	 	<option>retour dexpérience</option>
	    </select>
		<br><br>
        vous pouvez saisir votre texte
        <br>
		<textarea cols="60" rows="10" wrap="hard" name="texte" required></textarea>
		<br>
		<h3>Ajouter une image</h3>
		<input type="file" name="photo"/>
		<br><br>
		<input type="submit" name="publier">
	</form>
	</fieldset>
</body>
</html>
