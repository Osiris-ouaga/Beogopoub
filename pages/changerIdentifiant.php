
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Nouveau personnel</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/monstyle.css">
	</head>
	<body>		
		<div class="container">
			<br>
			
			<div class="panel panel-primary">
				<div class="panel-heading">Nouveaux identifiants</div>
				<div class="panel-body">
					<form method="post" action="insertStagiaire.php" class="form" enctype="multipart/form-data">
					
						<div class="form-group">
							<label for="NOM" class="control-label">Login</label>
							<input type="text" name="NOM" id="NOM" class="form-control"/>
                        </div>                    
						
						<div class="form-group">
							<label for="PRENOM" class="control-label">Ancien mot de passe</label>
							<input type="password" name="PRENOM" id="PRENOM" class="form-control"/>
                        </div>

                        <div class="form-group">
							<label for="PRENOM" class="control-label">Nouveau mot de passe</label>
							<input type="password" name="PRENOM" id="PRENOM" class="form-control"/>
                        </div>

                        <div class="form-group">
							<label for="PRENOM" class="control-label">Retaper le nouveau mot de passe</label>
							<input type="password" name="PRENOM" id="PRENOM" class="form-control"/>
                        </div>

                        <div class="form-group">
							<label for="NOM" class="control-label">Email</label>
							<input type="text" name="NOM" id="NOM" class="form-control"/>
						</div>
											
						<button type="submit" class="btn btn-primary">Enregistrer</button>
							
					</form>
				</div>
			</div>
			
			
				
		</div>
	</body>
</html>



