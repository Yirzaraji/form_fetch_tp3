<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Secure form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

<!-- MON FORM D'INSCRIPTION' -->
<form method="post" action="controller/inscription.php" style="width:50%; margin:0 auto;margin-top:5%;">
 
<h2 class="text-center">Inscription</h2>
  <div class="form-group">
    <label for="exampleInputEmail1">Login</label>
    <input type="text" class="form-control" id="exampleInputEmail1" 
    aria-describedby="emailHelp" placeholder="Indiquez votre pseudo" name="pseudo" required="required">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" 
    placeholder="Indiquez votre password" name="password" required="required">
  </div>
  
  <button type="submit" class="btn btn-primary" name="subbouton">Envoyer</button>
</form>





<?php

if(isset($_SESSION['pseudo2'])){
?>
    <br><div class="centrage">Inscription terminée</div>
<?php   
}
?>


<div class="destroyb">
  <br><br><a href="view/connect.php">Deja un compte ?</a>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
<script src="js/script.js"></script>
</body>

</html>
