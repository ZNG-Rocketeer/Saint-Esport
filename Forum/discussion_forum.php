<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/master.css">
  <title> Sainté E-sport </title>
</head>

<body>
  <!-- HEADER -->
  <header>
    <a href="../index.php"> <img class="Top-left" src="/Image/Logo_ASSE.png" alt="Sainte E-sport"> </a>
    <?php
    if(isset($_SESSION['pseudo'])){
      echo '<div class="Membre">Connecté en tant que : '.$_SESSION['pseudo'].'
      <br>
      <a href="/pdo_deco.php">Deconnexion</a>
      </div>';
    }
    else{
      echo '
      <div class="Membre">
      <a class="Enregistrer" href="/inscription.php">S\'inscrire</a>
      </br>
      <a class="Connexion" href="/connect.php">Connexion</a>
      </div>
      ';
    }
    ?>
  </header>

  <?php
  if(isset($_GET['idsuj'])){
    $idsuj=$_GET['idsuj'];
    $discuss=$pdo->prepare("SELECT * FROM Forum_posts WHERE sujet=?");
    $discuss->bindParam(1,$idsuj);
    $discuss->execute();
    

  }?>
</body>
</html>
