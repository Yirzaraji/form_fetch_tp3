<?php 
session_start();
error_reporting(-1);
ini_set('display_errors', 'On');

include ('../model/database.php');
include ('../view/header.php');

connectdb();
 ?>

<body>

<?php
//var_dump($_SESSION['pass']);
      if(isset($_SESSION['success'])){
        ?>   
        <form action="espaceMembre.php" method="post" >
          <div class="form-group">
            <input class="btn btn-info" type="submit" value="Deconnexion" name="deco">
            <input class="btn btn-danger" type="submit" value="Delete" name="delete">
          </div>
          <div class="form-group">
          <label for="pw">Ancien MDP</label></br>
            <input class="btn btn-dark" type="password" name="OldPw" id="pw">
          </br><label for="pw2">New MDP</label></br>
            <input class="btn btn-dark" type="password" name="NewPw" id="pw2"></br>
            <input class="btn btn-danger" type="submit" value="Confirm" name="pwConfirm">
          </div>
        </form>
        <?php 
        //deconnecte l'utilisateur
        if(isset($_POST['deco'])){
          session_destroy();

        //delete le compte utilisateur
        }else if(isset($_POST['delete'])){
          
          $req = $db->prepare('DELETE FROM user WHERE login = :login');
          $req->execute(array(
          'login' => $_SESSION['pseudo2']));
          session_destroy(); 
          header('Location: ../index.php');
        }
        //change le mot de passe de l'utilisateur
        else if(isset($_POST['pwConfirm'])){

          $isPasswordCorrectBis = password_verify(htmlspecialchars($_POST['OldPw']), $_SESSION['pass']);
          if($isPasswordCorrectBis){
           
            $passwordNew = password_hash(htmlspecialchars($_POST['NewPw']), PASSWORD_BCRYPT);
            $req = $db->prepare('UPDATE user SET password = :password WHERE login = :login');
            $req->execute(array(
            'password' => htmlspecialchars($passwordNew),
            'login' => htmlspecialchars($_SESSION['pseudo2'])
          
            ));
            ?>
            <div class="alert alert-success" role="alert">
                Password Changé !
              </div>
            <?php
          }else{
            ?>
            <div class="alert alert-danger" role="alert">
              Les passwords ne correspondent pas
            </div>
            <?php

          }
        }
        
        
        ?>



        <h1 class="text-center">Bienvenue sur votre espace membre <?php echo $_SESSION['pseudo2'].' ' ?>!</h1>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-4 text-center">
              <div class="card" style="width: 18rem;">
              
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 text-center">
              <div class="card" style="width: 18rem;">
              
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 text-center">
              <div class="card" style="width: 18rem;">
              
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
              <button class="btn btn-info justify-content-center" id="save">Save it ! </button>
              <div class="alert alert-success" id="success" role="alert">
                Success !
              </div>
          </div>
        </div>
        <?php
      } else{
        echo "Pour voir le contenu de cette page veuillez vous identifier";
        ?>
          <div class="destroyb">
            <br><br><a href="../view/connect.php">Home</a>
          </div>
        <?php
      }
?>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="../js/script.js"></script>   
</body>
</html>