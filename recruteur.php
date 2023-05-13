<?php
// Connexion à la base de données
include("connexion.php");

// Effectuer une requête SELECT pour récupérer les données de la table "employer"
$sql = "SELECT * FROM Employeur";
$result = mysqli_query($conn, $sql);

// Afficher les données dans un tableau
if (mysqli_num_rows($result) > 0) {
    echo "<table><tr><th>Nom utilisateur</th><th>Nom entreprise</th><th>Numéro IFU</th><th>RCCM</th><th>Téléphone</th><th>Adresse</th><th>Site web</th><th>E-mail</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['nom_U']."</td><td>".$row['nom_E']."</td><td>".$row['ifu']."</td><td>".$row['rccm']."</td><td>".$row['telephone']."</td><td>".$row['adresse']."</td><td>".$row['site_web']."</td><td>".$row['email']."</td></tr>";
    }
    echo "</table>";
} else {
    echo "Aucune donnée trouvée dans la table 'employeur'.";
}

// Fermer la connexion
mysqli_close($conn);
?>
