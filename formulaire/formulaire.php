<?php
 
$nom= (isset($_GET['nom']) ? $_GET['nom'] : "");

// partie prenom
$prenom= (isset($_GET['prenom']) ? $_GET['prenom'] : "");
 
// partie message
$message= (isset($_GET['message']) ? $_GET['message'] : "");

// partie mail
$mail= (isset($_GET['mail']) ? $_GET['mail'] : "");

//partie photo
$photo= (isset($_GET['photo']) ? $_GET['photo'] : "");

?>











<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="affiche.php" method="post">
	<label>Nom</label>
	<input type="text" name="nom">
	<br>
	<br>

	<label>Prenom</label>
	<input type="text" name="prenom">
	<br>
	<br>

	<label>Message</label>
	<input type="text" name="message">
	<br>
	<br>

	<label>MAIL</label>
	<input type="text" name="mail">
	<br>
	<br>

	<label>PHOTO</label>
	<input type="file" name="photo">
	<br>
	<br>

	<input type="submit" name="" value="Envoyer">
	
</form>
</body>
</html>

<!-- <?php 
echo "Votre nom est : </br>" . $nom;

echo "Votre prenom est : </br>" . $prenom;
echo "Votre message est : </br>" . $message;
echo "Votre mail est : </br>" . $mail;


 ?> -->