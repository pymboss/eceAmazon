<?php
      
$mail= isset($_POST["email"])? $_POST["email"] : "";
$MDP = isset($_POST["mot_de_passe"])? $_POST["mot_de_passe"] : "";
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$prenom= isset($_POST["prenom"])? $_POST["prenom"] : "";
$type= isset($_POST["type"])? $_POST["type"] : "";


$database = "ece_amazon";

//connexion au serveur 
$db_handle = mysqli_connect('localhost', 'root', '' );
$db_found = mysqli_select_db($db_handle, $database);

//verifie si la bdd existe 

if ($db_found) {

    $sql = "INSERT INTO utilisateur(email,mot_de_passe,nom,prenom,type)
            VALUES('$mail','$MDP','$nom','$prenom','$type')";
    mysqli_query($db_handle, $sql);


}


else {
    echo "Database not found";
}

mysqli_close($db_handle);

?>