<?php
// Connexion à la base de données MySQL
try {
    $pdo = new PDO("mysql:host=localhost;dbname=db_beogopoub", "root", "");
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// Récupérer les partenaires enregistrés
$query = "SELECT * FROM partner";
$partners = $pdo->query($query);

// Afficher les partenaires
echo "<table class='table'>";
echo "<thead><tr><th>Nom</th><th>Prénom</th><th>Nom de l'entreprise</th><th>Contacts</th><th>Numéro de poubelle</th><th>Localité</th><th>Actions</th></tr></thead>";
echo "<tbody>";
foreach ($partners as $partner) {
    echo "<tr>";
    echo "<td>" . $partner['nom_abonne'] . "</td>";
    echo "<td>" . $partner['prenom_abonne'] . "</td>";
    echo "<td>" . $partner['nom_entreprise'] . "</td>";
    echo "<td>" . $partner['contacts'] . "</td>";
    echo "<td>" . $partner['numero_poubelle'] . "</td>";
    echo "<td>" . $partner['localite'] . "</td>";
    echo "<td>";
    echo "<a href='delete_partner.php?id=" . $partner['id'] . "' class='btn btn-danger btn-sm'>Supprimer</a>";
    echo "<a href='edit_partner.php?id=" . $partner['id'] . "' class='btn btn-primary btn-sm'>Modifier</a>";
    echo "</td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";

// Fermer la connexion à la base de données
$pdo = null;
?>
