<?php include ('../view/header.php');
session_start();
 ?>

<body>

<?php
    if(isset($_SESSION['success'])){
        ?>   
        <h1 class="text-center">Bienvenue sur votre espace membre <?php echo $_SESSION['pseudo2'].' ' ?>!</h1>
        <?php
    } else{
      echo "Pour voir le contenu de cette page veuillez vous identifier";
    }
?>

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



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="../js/script.js"></script>   
</body>
</html>