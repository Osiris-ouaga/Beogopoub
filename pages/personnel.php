<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Personnel</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/monstyle.css">
	</head>
	<body>
		<div class="container">
                <?php include('entete1.php');?>	
            <!--<br>-->
            <div class="row">	
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-2">
			<div class="panel panel-primary">
					<div class="panel-heading">Rechercher un personnel</div>
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
                
                    <br>
                    <br>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1">
                <a class="btn btn-danger" href="ajouterPersonnel.php">Cliquer pour ajouter un personnel</a>
                </div>
                </div>
			
			<div class="panel panel-primary">
				<div class="panel-heading">Liste du personnel </div>
				<div class="panel-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nom</th>
								<th>Prenom(s)</th>
								<th>Email</th>
								<th>Civilité</th>
								<th>Contact</th>
								<th>Résidence</th>
								<th>Role</th>
								<th>Photo</th>
								<th>Etat</th>
								
							</tr>
						</thead>
						<tbody>
							<?php while($USER=$resultat->fetch()){?>
								<tr <?php 
										if($USER['ETAT']==1) 
											echo 'class="success"';
										else  
											echo 'class="danger"'; 
									?>>
									<td><?php echo $USER['ID'] ?></td>
									<td><?php echo $USER['LOGIN'] ?></td>
									<td><?php echo $USER['ROLE'] ?></td>
									<?php if($_SESSION['utilisateur']['ROLE']=="ADMIN") {?>
									<td>
											<a href="editerUtilisateur.php?id=<?php echo $USER['ID'] ?>">
												<span class="glyphicon glyphicon-pencil"></span>
											</a>
											
											&nbsp &nbsp
											
											<a OnClick="return confirm('Etes vous sur de vouloir supprimer cet utilisateur')" 
											href="supprimerUtilisateur.php?id=<?php echo $USER['ID'] ?>">
												<span class="glyphicon glyphicon-trash"></span>
											</a>
											
											&nbsp &nbsp
											<a href="activerUtilisateur.php?ID=<?php echo $USER['ID'] ?>
													&ETAT=<?php echo $USER['ETAT'] ?>">
												<?php 
													if($USER['ETAT']==1) 
														echo '<span class="glyphicon glyphicon-remove"></span>';
													else  
														echo '<span class="glyphicon glyphicon-ok"></span>'; 
												?>
												
											</a>					
									</td>
										<?php } ?>
								</tr>
							<?php } ?>
						</tbody>
					</table>
					<div>
						<ul class="nav nav-pills">
							<?php for($i=1;$i<=$nbrPage;$i++){ ?>
								<li class="<?php if($i==$page) echo 'active' ?>">
									<a href="utilisateurs.php?page=<?php echo $i ?>
											&motCle=<?php echo $mc ?>">
										Page <?php echo $i ?>
									</a>
								</li>
							<?php } ?>	
						</ul>
					</div>
				</div>				
			</div>	
				
		</div>
	</body>
</html>