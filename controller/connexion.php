<?php
session_start();
error_reporting(-1);
ini_set('display_errors', 'On');

include ('../model/database.php');
connectdb();

var_dump($db);
$_SESSION['pseudo2'] = htmlspecialchars($_POST['pseudo']);
$_SESSION['password2'] = htmlspecialchars($_POST['password']);
//$password = password_hash($_POST['password'], PASSWORD_BCRYPT);


// Récupération de du login rentré par le formulaire, ceci
$pseudo = $_SESSION['pseudo2'];
$req = $db->prepare('SELECT * FROM user WHERE login = :login');
$req->execute(array(

    'login' => $_SESSION['pseudo2']));



//On target la seul rangée de l'utilisateur concerné
$resultat = $req->fetch();
$user_login = $resultat['login'];



// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);
$_SESSION['pass'] = $resultat['password'];


if (!$isPasswordCorrect){
    $_SESSION['fail'] = 'Mauvais identifiant ou mot de passe !';
    header('Location: ../view/connect.php');
}

else
{
    if ($isPasswordCorrect && $_SESSION['pseudo2'] === $resultat['login']) {
        $_SESSION['success'] = 'Success !';
        header('Location: ../view/espaceMembre.php');
    }

    else {
        echo 'Mauvais identifiant ou mot de passe !';
        header('Location: ../view/connect.php');
    }
}

 


?>

