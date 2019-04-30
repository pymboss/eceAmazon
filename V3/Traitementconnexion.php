<?php
      
$Mail = isset($_POST["email"])? $_POST["email"] : "";
$MDP = isset($_POST["mot_de_passe"])? $_POST["mot_de_passe"] : "";

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
    echo "l'utilisateur existe !";
}
}

mysqli_close($db_handle);
    
?>