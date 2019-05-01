<!DOCTYPE html>
<html>
<head>
	<title>ECE AMAZON</title>
	<link rel="stylesheet" href="styles.css" type="text/css">
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/grid-gallery.min.js"></script>
	<meta charset="utf-8">
	<div class ="header">
		<h1>ECE AMAZON</h1>
		</div>

</head>
<body>



<div class="topnav">
	<nav>
		<ul>
			<li class="menu-accueil"><a href="page d'accueil.html">ACCUEIL</a></li>
			<li class="menu-categories"><a href="categories.html">CATEGORIES</a>
				<ul class="submenu">
					<li><a href="musique.php">Musiques</a></li>
					<li><a href="sport.php">Sport et loisirs</a></li>
					<li><a href="vetement.php">Vêtements</a></li>
					<li><a href="livres.php">Livres</a></li>
				</ul>
			</li>

			<li class="menu-vente_Flash"><a href="vente_Flash.html">VENTES FLASH</a></li>
			<li class="menu-vendre"><a href="vendre.html">VENDRE</a></li>
			<li class="menu-admin"><a href="admin.html">ADMIN</a></li>
			<li class="menu-panier"><a href="panier.php">PANIER</a></li>
			<li class="menu-connexion" style="float: right;"><a href="connexion.php">CONNEXION</a></li>
			<li class="menu-connexion" style="float: right;"><a href="inscription.php">S'INSCRIRE</a></li>
			<li class="menu-compte"><a href="compte.php">COMPTE</a></li>

		</ul>
	</nav>
 </div>


<center>
			<h3>Formulaire d'inscription</h3>
				
<form method="post" action="Traitementinscription.php">
				
			<h4>Informations personnelles</h4>

		</center>		
				<div class= "text" style="float:left;width:50%;">
					email : </br> </br>
					Prenom : </br> </br>
					Nom : </br> </br>
					mot de passe : <br> </br>
					

				</div>

		<div class="textarea" style="float:left;width:50%;">
 
 		<input type="text" name="email"></br>	
		<input type="text" name="prenom"></br>
		<input type="text" name="nom"></br>	
		<input type="password" name="mot_de_passe"></br>
		

		</div>

			

		<center><h4>Informations de connexion</h4></center>

				<div class="text" style="float:left;width:50%;">
						Type de connexion : </br> </br>
				</div>

				<div class="textarea" style="float:left;width:50%;">

					<input type="radio" name="type" value="Acheteur">Acheteur
					<input type="radio" name="type" value="Vendeur">Vendeur
					<input type="radio" name="type" value="Administrateur">Admin</br></br></br>
					
				</div>
<center><input type="submit" name="Submit"></center>
		</form>
	


</body>
</html>
