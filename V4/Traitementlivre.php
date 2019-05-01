<?php

    $database = "ece_amazon";
    $db_handle = mysqli_connect('localhost', 'root', '' );
    $db_found = mysqli_select_db($db_handle, $database);

if ($db_found) 
{

    
        
        $sql = "SELECT * FROM item WHERE catégorie='Livre'" ;
        $result = mysqli_query($db_handle, $sql);
        while ($data = mysqli_fetch_assoc($result)) {
	        echo "id_ref" . $data['id_ref'] . '<br>';
	        echo "email_vendeur" . $data['email_vendeur'] . '<br>';
	        echo "nom" . $data['nom'] . '<br>';
	        echo "decription" . $data['description'] . '<br>';
	        echo "photo" . $data['photo'] . '<br>';
	        echo "prix" . $data['prix'] . '<br>';
	        echo "nb_vendu" . $data['nb_vendu'] . '<br>';
	        echo "categorie" . $data['categorie'] . '<br>'; 
            echo "quantité" . $data['quantité'] . '<br><br><br>';
        }//end while
    }//end if
    //si le BDD n'existe pas
    else {
        echo "Database not found";
    }//end else
    //fermer la connection