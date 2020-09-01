<?php

error_reporting(-1);
ini_set('display_errors', 'On');


//include ('database.php');
//getDatabaseConnexion();




function connectdb(){
define('DB_NAME', 'form_secure');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', '127.0.0.1');


    try {
        global $db;
        //echo 'connect db';
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        
        //global $jointure;
        //jointure de table
        //$jointure = $db->query('SELECT * FROM user INNER JOIN roles ON user.attribut_roles = roles.id_roles');
        
        //$jointure = $db->query('SELECT * FROM roles INNER JOIN user ON id_roles = attribut_roles');
        
    } catch (Exception $e) {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : ' . $e->getMessage());
    }






    





    /* function pass(){
        $jointure2 = $db->query('SELECT attribut_roles FROM user');

        // On affiche chaque entrée une à une
        while ($donnees = $jointure2->fetch())
        {
            
            echo '<br>'.$donnees['attribut_roles'].'<br>';
        }

    } */
}





?>