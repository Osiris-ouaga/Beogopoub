<nav class="navbar navbar-inverse navbar-top">
	<div class="container-fluid">
		
		<ul class="nav navbar-nav">
			<li><a href="administration.php">Gestion des poubelles</a></li>
			<li><a href="personnel.php">Gestion du personnel</a></li>	
			<li><a href="gestion_partenaires.php">Gestion de partenaires</a></li>		
		</ul>
		
		<ul class="nav navbar-nav navbar-right">
				<!--<li>
					<a href="editerUtilisateur.php?id=<?php echo $_SESSION['utilisateur']['ID'];?>">
						<span class="glyphicon glyphicon-user"></span> 
						<?php echo $_SESSION['utilisateur']['LOGIN'];?>
					</a>
                </li>-->
                <li>
					<a href="admin.php">
						<span class="glyphicon glyphicon-user"></span>
						admin
					</a>
				</li>
				<li>
					<a href="SeDeconnecter.php">
						<span class="glyphicon glyphicon-log-out"></span>
						Se Deconnecter
					</a>
				</li>
			</ul>
	</div>
</nav>