
<?php
session_start();
error_reporting(-1);
ini_set('display_errors', 'On');

include ('../model/database.php');
connectdb();

$_SESSION['pseudo2'] = htmlspecialchars($_POST['pseudo']);
$password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_BCRYPT);

var_dump($_SESSION['pseudo2']);
var_dump($password);

    //Appel de la fonction dans database.php puis insert user int table
    $req = $db->prepare('INSERT INTO user (login, password) VALUES(?, ?)');
    $req->execute(array($_SESSION['pseudo2'], $password));

header('Location: ../index.php');


?>
