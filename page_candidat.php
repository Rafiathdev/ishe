

	<?php
	
	include("connexion.php");
	// Démarrer la session
	session_start();

	// Vérifier si l'utilisateur est connecté
	if (isset($_SESSION["id"])) {
		// Inclure le fichier de configuration de la base de données
		

		// Récupérer l'identifiant de l'utilisateur connecté
		$id = $_SESSION["id"];

		// Sélectionner l'utilisateur connecté dans la table "employer"
		$sql = "SELECT * FROM candidat WHERE id = $id";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) == 1) {
			// Afficher les informations de l'utilisateur dans un formulaire
			$row = mysqli_fetch_assoc($result);
			echo "<form>";
			echo "<label>Nom : </label><input type='text' value='" . $row["nom_c"] . "'><br>";
			echo "<label>Prénom : </label><input type='text' value='" . $row["prenom_c"] . "'><br>";
			echo "<label>Sexe : </label><input type='text' value='" . $row["sexe"] . "'><br>";
			echo "<label>Date de naissance : </label><input type='text' value='" . $row["date_n"] . "'><br>";
			echo "<label>Niveau d'études : </label><input type='text' value='" . $row["niveau"] . "'><br>";
			echo "<label>Nationalité : </label><input type='text' value='" . $row["nationalite"] . "'><br>";
			echo "<label>Adresse : </label><input type='text' value='" . $row["adresse"] . "'><br>";
			echo "<label>Qualification : </label><input type='text' value='" . $row["qualification"] . "'><br>";
			echo "<label>Années d'expérience : </label><input type='text' value='" . $row["annee_experience"] . "'><br>";
			echo "<label>Numéro de téléphone : </label><input type='text' value='" . $row["telephone"] . "'><br>";
			echo "<label>Département : </label><input type='text' value='" . $row["departement"] . "'><br>";
			echo "<label>Ville : </label><input type='text' value='" . $row["ville"] . "'><br>";
			echo "<label>PDF CV : </label><a href='" . $row["pdf_cv"] . "'>Télécharger</a><br>";
			echo "<label>Photo : </label><img src='" . $row["photo"] . "' width='100'><br>";
			echo "<label>Adresse e-mail : </label><input type='text' value='" . $row["email"] . "'><br>";
			echo "</form>";
		} else {
			echo "Erreur : utilisateur introuvable dans la base de données";
		}

		// Fermer la connexion à la base
 }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mon profil</title>
</head>

<body>


	
	<h1>Mon profil</h1>
</body>
</html>