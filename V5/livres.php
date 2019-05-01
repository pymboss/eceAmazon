
<?php
session_start()
?>




<!DOCTYPE html>
<html>

<head>
	<title>ECE AMAZON</title>
	<link rel="stylesheet" href="styles.css" type="text/css">
	<meta charset="utf-8">

</head>

<body>
	<div class ="header">
		<h1>ECE AMAZON</h1>
		</div>
	<div class="topnav">
	<nav>
		<ul>
			<li class="menu-accueil"><a href="page d'accueil.html">ACCUEIL</a></li>
			<li class="menu-categories"><a href="categories.html">CATEGORIES</a>
				<ul class="submenu">
					<li><a href="musique.html">Musiques</a></li>
					<li><a href="sport.html">Sport et loisirs</a></li>
					<li><a href="vetement.html">Vêtements</a></li>
					<li><a href="livres.html">Livres</a></li>
				</ul>
			</li>

			<li class="menu-vente_Flash"><a href="vente_Flash.html">VENTES FLASH</a></li>
			<li class="menu-vendre"><a href="vendre.html">VENDRE</a></li>
			<li class="menu-admin"><a href="admin.html">ADMIN</a></li>
			<li class="menu-panier"><a href="panier.html">PANIER</a></li>
			<li class="menu-connexion" style="float: right;"><a href="connexion.php">CONNEXION</a></li>
			<li class="menu-connexion" style="float: right;"><a href="inscription.html">S'INSCRIRE</a></li>
			<li class="menu-compte" style="float: right;"><a href="compte.html">COMPTE</a></li>

		</ul>
	</nav>
 </div>



<h4>Nos Livres</h4><div class="ensemble">


			<?php
			
			$database = "ece_amazon";
			$db_handle = mysqli_connect('localhost', 'root', '');
			$db_found = mysqli_select_db($db_handle, $database);
    		$sql = "SELECT * FROM item WHERE categorie = 'Livre'";
    
    $result = mysqli_query($db_handle,$sql);
?>


<?php
while ($data = mysqli_fetch_assoc($result)) {
	?> <div class="container">
		<?php
	// on affiche les résultats
			echo "id_ref :   " .$data['id_ref'] . '<br>';
	        echo "email_vendeur :   " . $data['email_vendeur'] . '<br>';
	        echo "nom  :  " . $data['nom'] . '<br>';
	        echo "decription :   " . $data['description'] . '<br>';
	        
            echo "<img src=".$data['photo'].">";
            
	       		echo "prix :  " . $data['prix'] . '<br>';
	        echo "nb_vendu :  " . $data['nb_vendu'] . '<br>';
	        echo "categorie : " . $data['categorie'] . '<br>'; 
            echo "quantité :  " . $data['quantite'] . '<br><br><br>';

            ?></div><?php
}
?>



</div>
</body>
</html>