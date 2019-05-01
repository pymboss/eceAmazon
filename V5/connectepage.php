
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

			<li class="menu-compte"><a href="compte.php">COMPTE</a>
				<ul class="submenu">
					<li><a href="mesinfos.php">Mes Informations</a></li>
					<li><a href="monpanier.php">Panier</a></li>

</ul>


			</li>

           <li class="menu-bonjour">BONJOUR</a></li>
           <?php

			echo $_SESSION['email'];
			?>
		</ul>
	</nav>
 </div>

 <div id="slider" style="float:left;width:50%;">
  <figure>
    <img src="banniere.jpg" alt>
    <img src="banniere.jpg" alt>
    <img src="banniere.jpg" alt>
    <img src="banniere.jpg" alt>
    <img src="banniere.jpg" alt>
  </figure>
</div>

<div class="card" style="float:right;width:50%;">
	
	<center>
				<h3>Contactez nous</h3>

		<p>Chez PayJ,<br>
		Votre bonheur vous appartient</p></center>
	

</div>

</body>
</html>