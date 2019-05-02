
<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<title>ECE AMAZON</title>
	<link rel="stylesheet" href="styles.css" type="text/css">
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/grid-gallery.min.js"></script>
	<meta charset="utf-8">
	
</head>

<body>
<div id ="banniere">
<img src="img/bleu.jpg"  height="100" width="100%">

		</div>

	<div class="topnav">
	<nav>
		<ul>
			<img src="img/logo.png"  width="55" style="float: left; padding-top: 10px; padding-left: 15px;">
			<li class="menu-accueil"><a href="page d'accueil.php">ACCUEIL</a></li>
			<li class="menu-categories"><a href="page d'accueil.php">CATEGORIES</a>
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
			<li class="menu-compte"><a href="compte.php">COMPTE</a>
				<ul class="submenu">
					<li><a href="mesinfos.php">Mes Informations</a></li>
					<li><a href="monpanier.php">Panier</a></li>
</ul>


			</li>

		</ul>
	</nav>
 </div>


 <center>
			<h3>Formulaire d'inscription pour les acheteurs</h3>
				
<form method="post" action="traitementinscriptionacheteur.php">
				
			<h4>Informations personnelles</h4>

		</center>		
				<div class= "text" style="float:left;width:50%;">
					adresse1 : </br> </br>
					adresse2: </br> </br>
					Ville : </br> </br>
					Code postal : <br> </br>
					Pays : <br> </br>
					num tel : <br> </br>
					

				</div>

		<div class="textarea" style="float:left;width:50%;">
 
 		<input type="text" name="adresse_1"></br>	
		<input type="text" name="adresse_2"></br>
		<input type="text" name="ville"></br>	
		<input type="number" name="code_postal"></br>
		<input type="text" name="pays"></br>
		<input type="tel" name="num_tel"></br>


		</div>

			

		

				

 <div class="textarea" style="float:left;width:50%;">
 <label for="type_carte_payement">Quelle carte de paiement ?</label><br />
 <select name="carte" id="carte">
           <option value="mastercard">Mastercard</option>
           <option value="visa">Visa</option>
           <option value="americanexpress">AmericanExpress</option>
            
       </select>
</div>

<div class= "text" style="float:left;width:50%;">

                    
					num carte : <br> </br>
					nom carte : <br> </br>
					date expiration : <br> </br>
					code securite : <br> </br> 
			</div>		

       <div class="textarea" style="float:left;width:50%;">
       		<input type="number" name="num_carte"></br>	
       		<input type="text" name="nom_carte"></br>
       		<input type="date" name="date_expiration"></br>	
       		<input type="number" name="code_securite"></br>		

					
				</div>
<center><input type="submit" name="Submit"></center>
		</form>
	


</body>
</html>