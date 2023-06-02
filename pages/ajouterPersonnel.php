
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
				<div class="panel-heading">Nouveau personnel</div>
				<div class="panel-body">
					<form method="post" action="insertStagiaire.php" class="form" enctype="multipart/form-data">
					
						<div class="form-group">
							<label for="NOM" class="control-label">Nom</label>
							<input type="text" name="NOM" id="NOM" class="form-control"/>
						</div>
						
						<div class="form-group">
							<label for="PRENOM" class="control-label">Prénom(s)</label>
							<input type="text" name="PRENOM" id="PRENOM" class="form-control"/>
                        </div>
                        
                        <div class="form-group">
							<label for="NOM" class="control-label">Email</label>
							<input type="text" name="NOM" id="NOM" class="form-control"/>
						</div>
						
                        <label class="control-label">Civilité</label>
						<div class="radio">							
							<label><input type="radio" name="civilite" value="F" checked/> F </label><br/>
							<label><input type="radio" name="civilite" value="M"/> M </label><br/>							
						</div>
                        
                        <div class="form-group">
							<label for="NOM" class="control-label">Contact</label>
							<input type="text" name="NOM" id="NOM" class="form-control"/>
						</div>
						
						<div class="form-group">
							<label for="PRENOM" class="control-label">Résidence</label>
							<input type="text" name="PRENOM" id="PRENOM" class="form-control"/>
                        </div>
                        
						<div class="form-group">
							<label for="ID_FILIERE" class="control-label">Role</label>
							<select name="ID_FILIERE" id="ID_FILIERE" class="form-control">
									<option value="">Administrateur
                                    </option>
                                    <option value="">Agent de collecte
									</option>
							</select>
						</div>
                        
                        <div class="form-group">
							<label for="PHOTO" class="control-label">Photo</label>
							<input type="file" name="PHOTO" id="PHOTO"/>
						</div>
						
						<div class="form-group">
							<label for="PRENOM" class="control-label">Etat</label>
							<input type="text" name="PRENOM" id="PRENOM" class="form-control"/>
						</div>
											
						<button type="submit" class="btn btn-primary">Enregistrer</button>
							
					</form>
				</div>
			</div>
			
			
				
		</div>
	</body>
</html>



