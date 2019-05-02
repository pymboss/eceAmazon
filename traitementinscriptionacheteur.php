

<?php

session_start();


$mail = $_SESSION['email'];
$adresse1= isset($_POST["adresse_1"])? $_POST["adresse_1"] : "";
$adresse2 = isset($_POST["adresse_2"])? $_POST["adresse_2"] : "";
$ville = isset($_POST["ville"])? $_POST["ville"] : "";
$codepostal= isset($_POST["code_postal"])? $_POST["code_postal"] : "";
$pays= isset($_POST["pays"])? $_POST["pays"] : "";
$numtel= isset($_POST["num_tel"])? $_POST["num_tel"] : "";
$typecarte= isset($_POST["type_carte_payement"])? $_POST["type_carte_payement"] : "";
$numcarte= isset($_POST["num_carte"])? $_POST["num_carte"] : "";
$nomcarte= isset($_POST["nom_carte"])? $_POST["nom_carte"] : "";
$dateexpiration= isset($_POST["date_expiration"])? $_POST["date_expiration"] : "";
$codesecurite= isset($_POST["code_securite"])? $_POST["code_securite"] : "";



$database = "ece_amazon";

//connexion au serveur 
$db_handle = mysqli_connect('localhost', 'root', '' );
$db_found = mysqli_select_db($db_handle, $database);

//verifie si la bdd existe 

if ($db_found) {

    $sql = "INSERT INTO acheteur(email_acheteur,adresse_1,adresse_2,ville,code_postal,pays,num_tel,type_carte_payement,num_carte,nom_carte,date_expiration,code_securite)
            VALUES('".$mail."','".$adresse1."','".$adresse2."','".$ville."','".$codepostal."','".$pays."','".$numtel."','".$typecarte."','".$numcarte."','".$nomcarte."','".$dateexpiration."','".$codesecurite."')";
    mysqli_query($db_handle, $sql);
    echo "Database found";
    echo $_SESSION['email'];
    echo $mail;



}


else {
    echo "Database not found";
}

mysqli_close($db_handle);

?>