<?php
   
session_start();
$mail = $_SESSION['email'];
$pseudo= isset($_POST["pseudo"])? $_POST["pseudo"] : "";



$database = "ece_amazon";

//connexion au serveur 
$db_handle = mysqli_connect('localhost', 'root', '' );
$db_found = mysqli_select_db($db_handle, $database);

//verifie si la bdd existe 

if ($db_found) {

    $sql = "INSERT INTO administrateur(email_admin,pseudo)
            VALUES('".$mail."','".$pseudo."')";
    mysqli_query($db_handle, $sql);

echo "Database found";
}


else {
    echo "Database not found";
}



mysqli_close($db_handle);

?>