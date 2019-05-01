<?php

session_start();


$Mail = isset($_POST["email"])? $_POST["email"] : "";
$MDP = isset($_POST["mot_de_passe"])? $_POST["mot_de_passe"] : "";
$prenom= isset($_POST["prenom"])? $_POST["prenom"] : "";

$database = "ece_amazon";
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

if ($db_found) {
$sql = "SELECT * FROM utilisateur";
    if ($Mail != "") {
        $sql .= " WHERE email LIKE '%$Mail%'";
    if ($MDP != "") {
        $sql .= " AND mot_de_passe LIKE '%$MDP%'";
        }
}
$result = mysqli_query($db_handle, $sql);

if (mysqli_num_rows($result) == 0) {
echo "l'utilisateur n'existe pas, veuillez créer un compte";
} else {

	$_SESSION['email'] = $Mail;
   include('connectepage.php');
}
}

mysqli_close($db_handle);
    
?>