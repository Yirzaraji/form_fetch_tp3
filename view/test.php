<?php
session_start();
error_reporting(-1);
ini_set('display_errors', 'On');

include ('../model/database.php');
connectdb();

if(isset($_POST['player']) && isset($_POST['playerb']) ) { 
    //echo $_POST['player'], $_POST['player']; 
    $req = $db->prepare('INSERT INTO rencontre (playerA, playerB) VALUES(?, ?)');
    $req->execute(array($_POST['player'], $_POST['playerb']));
    //do some sql request
}

//marche pas 
/* if(isset($_POST['playerc'])) { //if i have this post
   
        //var_dump($_POST['playerc']);
        foreach($_POST['playerc'] as $players){
            //echo $players;
            
        }
  
        //echo 'target'.$_POST['playerc'].' endTarget';
} */


//var_dump($_POST['test']);
/* if(isset($_POST['test'])) { //if i have this post
    echo $_POST['test']; // print it
    echo "WTF";
    //do some sql request
    $req = $db->prepare('INSERT INTO rencontre (playerA, playerB) VALUES(?, ?)');
    $req->execute(array($_POST['test'], $_POST['testb']));
}
else{

} */