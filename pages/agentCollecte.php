
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>BEOGOPOUB</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/monstyle.css">
	</head>
	<body>
		 <div id="wrapper">
			
			<div class="container">
					<?php include('entete2.php');?>
					
				<div class="row">	
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="panel panel-success">
					<div class="panel-heading">Rechercher une poubelle</div>
					<div class="panel-body">
						<form method="get" action="stagiaires.php" class="form-inline">
						<div class="form-group">						
								
								<input type="text" name="motCle" 
										placeholder="Taper un mot clé"
										id="motCle" class="form-control" 
										value=""/>
								<button type="submit" class="btn btn-success">
									<i class="glyphicon glyphicon-search"></i>
									Rechercher
								</button>			
							</div>
						</form>
					</div>
				</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="panel panel-default">
					<div class="panel-heading">Localiser une poubelle</div>
					<div class="panel-body">
						<form method="get" action="stagiaires.php" class="form-inline">
						<div class="form-group">						
								
								<input type="text" name="motCle" 
										placeholder="Taper le numero de la poubelle"
										id="motCle" class="form-control" 
										value=""/>
								<button type="submit" class="btn btn-success">
									<i class="glyphicon glyphicon-search"></i>
									Localiser
								</button>				
							</div>
						</form>
					</div>
				</div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <a class="btn btn-danger" href="changerIdentifiant.php">Cliquer pour changer les identifiants</a>
                </div>

				</div>

				<div class="panel panel-primary">
					<div class="panel-heading">	Liste des poubelles  
					</div>
					<div class="panel-body">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Numero</th>
                                    <th>Niveau Remplissage Com1</th>
                                    <th>Niveau Remplissage Com2</th>
									<th>Poids Com1</th>
                                    <th>Poids Com2</th>
                                    <th>Alerte</th>
									<th>Etat</th>
								</tr>
							</thead>
							<tbody>								
								<tr>
                                    <td>1</td>
									<td>00125</td>
                                    <td>57%</td>
                                    <td>82%</td>
									<td>14 kg</td>
                                    <td>62 kg</td>
                                    <td>Alerte</td>
									<td>Etat</td>
								</tr>
								
							</tbody>
						 </table>					
					</div>				
				</div>	
				
			</div>
		</div>
	</body>
</html>


