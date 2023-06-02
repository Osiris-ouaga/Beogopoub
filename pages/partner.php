<?php
// Vérification de session
session_start();
if (!isset($_SESSION['personnel'])) {
    header('location: login.php');
    exit();
}

// Connexion à la base de données MySQL
try {
    $pdo = new PDO("mysql:host=localhost;dbname=db_beogopoub", "root", "");
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// Récupérer les valeurs du formulaire
$nomAbonne = $_POST['nom'];
$prenomAbonne = $_POST['prenom'];
$nomEntreprise = $_POST['nomEntreprise'];
$contacts = $_POST['contact'];
$numeroPoubelle = $_POST['numeroPoubelle'];
$localite = $_POST['localite'];

// Préparer la requête SQL
$sql = "INSERT INTO partner (nom_abonne, prenom_abonne, nom_entreprise, contacts, numero_poubelle, localite)
        VALUES (?, ?, ?, ?, ?, ?)";

// Exécuter la requête SQL avec les valeurs du formulaire
$stmt = $pdo->prepare($sql);
$stmt->execute([$nomAbonne, $prenomAbonne, $nomEntreprise, $contacts, $numeroPoubelle, $localite]);

if ($stmt->rowCount() > 0) {
    echo "Données enregistrées avec succès.";
} else {
    echo "Erreur lors de l'enregistrement des données.";
}

// Fermer la connexion à la base de données
$pdo = null;
?>
