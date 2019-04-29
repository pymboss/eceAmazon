<!DOCTYPE html>
<html>
<head>
	<title>Votre compte</title>
</head>
<body>

<center>
<h3>Formulaire d'inscription</h3>
	<div style="float:left;width:10%;">
		e_mail : </br> </br>
		Pseudo : </br> </br>
		Prenom : </br> </br>
		Nom : </br> </br>
		Mot de passe : <br> </br>
		Type de connexion : </br> </br>
		Adresse : </br> </br>
		Code postal: </br> </br>
		Ville : </br> </br>
		Pays : </br> </br>
		Numero de tel : </br> </br>	
	</div>

	<div style="float:left;width:75%;">
		<form method="post" action="Traitementinscription.php">
		
		<input type="text" name="e-mail"></br>	 </br>
		<input type="text" name="Pseudo"></br>	 </br>
		<input type="text" name="Prenom"></br>	 </br>
		<input type="text" name="Nom"></br>	 </br>
		<input type="password" name="Mdp"></br>	</br> </br>
		<input type="radio" name="Type" value="1">Acheteur
		<input type="radio" name="Type" value="2">Vendeur
		<input type="radio" name="Type" value="3">Admin</br></br></br>
		<input type="text" name="Adresse"></br> </br>
		<input type="number" name="Codepostal"></br> </br>
		<input type="text" name="Ville"></br> </br>
		<input type="text" name="Pays"></br>	 </br>
		<input type="number" name="Telephone"></br>	    </br>
		<input type="submit" name="Submit">
		
		</form>
	</div>
	
</center>

</body>
</html>