<?php

session_start();
include ('../view/header.php');
?>



<body>

  <!-- FORM DE CONNEXION -->
  <form method="post" action="../controller/connexion.php" style="width:50%; margin:0 auto;margin-top:5%;">
  <h2 class="text-center">Connexion</h2>
    <div class="form-group">
      <label for="pseudo">Votre pseudo</label>
      <input type="text" class="form-control" placeholder="Indiquez votre pseudo" name="pseudo" required="required">
    
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Votre Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" 
      placeholder="Indiquez votre password" name="password" required="required">

    </div>
    <button type="submit" class="btn btn-primary" name="subbouton">Envoyer</button>
  </form>

<?php

  if(isset($_SESSION['success'])){
    echo '<br><div class="centrage">'. $_SESSION['success'] . ' </div>';
  }
  else if(isset($_SESSION['fail'])){
    echo '<br><div class="centrage">' . $_SESSION['fail'] . ' </div>';
  }
  else{
    echo '<br><div class="centrage">Authenfication requise</div>';
  }


session_destroy();

?>

</body>

</html>
