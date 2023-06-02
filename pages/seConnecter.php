<?php
	require_once('connexionDb.php');
	session_start();
	
	$LOGIN=$_POST['login'];
	$PWD=$_POST['pwd'];
	
	
	$requete="select * from personnel where LOGIN=? and PWD=MD5(?)";
		
	$param=array($LOGIN,$PWD);	
	$resultat = $pdo->prepare($requete);		
	$resultat->execute($param);	
	
	if($user=$resultat->fetch()){
		
				$_SESSION['personnel']=$user;
				header("Location:administration.php");
    }else{
		 $_SESSION['erreurLogin']='<strong>Erreur !</strong> Identifiant ou mot de passe incorrect !!!';
         header("Location:login.php");
    } 
	
?>