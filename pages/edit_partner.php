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

    // Récupérer les informations du partenaire
    $query = "SELECT * FROM partner WHERE id = :id";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':id', $partnerId);
    $statement->execute();
    $partner = $statement->fetch(PDO::FETCH_ASSOC);

    if ($partner) {
        // Afficher le formulaire de modification du partenaire
        ?>
        <!DOCTYPE HTML>
        <html>
        <head>
            <meta charset="utf-8" />
            <title>Modifier le partenaire</title>
            <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
        </head>
        <body>
            <div class="container">
                <h1>Modifier le partenaire</h1>
                <form method="post" action="edit_partner.php">
                    <input type="hidden" name="id" value="<?php echo $partner['id']; ?>">
                    <div class="form-group">
                        <label for="nom">Nom de l'abonné</label>
                        <input type="text" name="nom" id="nom" class="form-control" value="<?php echo $partner['nom_abonne']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom de l'abonné</label>
                        <input type="text" name="prenom" id="prenom" class="form-control" value="<?php echo $partner['prenom_abonne']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="nomEntreprise">Nom de l'entreprise/association</label>
                        <input type="text" name="nomEntreprise" id="nomEntreprise" class="form-control" value="<?php echo $partner['nom_entreprise']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="contact">Contacts</label>
                        <input type="text" name="contact" id="contact" class="form-control" value="<?php echo $partner['contacts']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="numeroPoubelle">Numéro de la poubelle</label>
                        <input type="text" name="numeroPoubelle" id="numeroPoubelle" class="form-control" value="<?php echo $partner['numero_poubelle']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="localite">Localité</label>
                        <input type="text" name="localite" id="localite" class="form-control" value="<?php echo $partner['localite']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </form>
            </div>
        </body>
        </html>
        <?php
    } else {
        // Rediriger vers la page des partenaires
        header('Location: gestion_partenaires.php');
        exit();
    }
} else {
    // Rediriger vers la page des partenaires
    header('Location: gestion_partenaires.php');
    exit();
}
