<?php
// Connexion à la base de données
$nomServeur = "localhost";
$nomBD = "ishede";
$nomUtilisateur = "ola";
$motPasse = "rafiath";

 // Connexion à la base de données
 $conn = mysqli_connect($nomServeur, $nomUtilisateur, $motPasse, $nomBD);
 if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
 }


?>
