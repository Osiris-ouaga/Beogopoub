<?php
// Vérifier si l'ID du partenaire est passé en paramètre
if (isset($_GET['id'])) {
    $partnerId = $_GET['id'];

    // Connexion à la base de données MySQL
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=db_beogopoub", "root", "");
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    // Supprimer le partenaire de la base de données
    $query = "DELETE FROM partner WHERE id = :id";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':id', $partnerId);
    $statement->execute();

    // Rediriger vers la page des partenaires
    header('Location: gestion_partenaires.php');
    exit();
} else {
    // Rediriger vers la page des partenaires
    header('Location: gestion_partenaires.php');
    exit();
}
