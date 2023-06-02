<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>Espace client</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
    <style>
        .partner-form {
            margin-bottom: 20px;
        }
        .partner-list {
            height: 100%;
            overflow-y: auto;
        }
        
        /* Ajout du style CSS personnalisé */
        .btn-action {
            margin-right: 5px;
        }
    </style>
</head>
<body>        
    <div class="container">
	<?php include('entete1.php');?>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-primary partner-form">
                    <div class="panel-heading">Enregistrer un nouveau Partenaire</div>
                    <div class="panel-body">
                        <form method="post" action="partner.php" class="form" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="NOM" class="control-label">Nom de l'abonné</label>
                                <input type="text" name="nom" id="NOM" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="PRENOM" class="control-label">Prénom de l'abonné</label>
                                <input type="text" name="prenom" id="PRENOM" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="NOM" class="control-label">Nom de l'entreprise/association</label>
                                <input type="text" name="nomEntreprise" id="NOM" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="PRENOM" class="control-label">Contacts</label>
                                <input type="text" name="contact" id="PRENOM" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="NOM" class="control-label">Numero de la poubelle</label>
                                <input type="text" name="numeroPoubelle" id="NOM" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="PRENOM" class="control-label">Localité</label>
                                <input type="text" name="localite" id="PRENOM" class="form-control"/>
                            </div>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-primary partner-list">
                    <div class="panel-heading">Liste des Partenaires</div>
                    <div class="panel-body">
                        <?php include 'get_partners.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
