<!DOCTYPE html>
<html>

<head>
  <title>Votre compte</title>
  <link rel="stylesheet" href="styles.css" type="text/css">
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
      <li class="menu-connexion" style="float: right;"><a href="connexion.html">CONNEXION</a></li>
      <li class="menu-connexion" style="float: right;"><a href="inscription.html">S'INSCRIRE</a></li>
      <li class="menu-compte"><a href="compte.html">COMPTE</a></li>

    </ul>
  </nav>
 </div>

<center>
      <h3>Connexion</h3>
       <form method="post" action="Traitementconnexion.php">
    

      <div class= "carreconnexion" >
          
          <div class="textconnexion" style="float:left; ">
            e_mail : <br><br>
            Mot de passe :
          </div>
          
          <div class="textareaconnexion" style="float:right;">
          
           <input type="text" name="email"></br>
           <input type="password" name="mot_de_passe"><br>

          </div>
        
        <div class="validerconnexion"style="width: 100px";> 
        <input  type="submit" name="Submit">
        </div>

      </div>

    </form>
  
</body>
</html>