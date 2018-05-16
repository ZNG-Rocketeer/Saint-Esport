<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="master.css">
  <title> Sainté E-sport </title>
</head>

<body>
  <!-- HEADER -->
  <?php include("assets/entete.php");
  ?>
  <br/>
  <?php
  include 'assets/pdo_init.php';
  include 'assets/pdo_new_user.php';

  if(isset($_GET['inscrit'])){
    if($_GET['inscrit']==1){
      echo '
      <h2 class="centrer">Vous êtes inscrit!!</h2>
      ';
    }
  }
  else{
    echo'
    <form class="centrer" name="inscription" action="inscription.php" method="post">
    <fieldset class="box">
    <legend><h2 class="centrer">Inscription</h2></legend>
    <label>
    Pseudo: <br/><input class="input centrer" type="text" name="pseudo"  placeholder="Entrez votre Pseudo"'; if (isset($_POST["pseudo"])) {echo 'value="'.$_POST['pseudo'].'" ';} echo 'required="required">
    </label>
    <br/>
    <label>
    Adresse Mail: <br/><input class="input centrer" type="email" name="mail" placeholder="Entrez votre E-mail"'; if (isset($_POST['mail'])) {echo 'value="'.$_POST['mail'].'" ';} echo 'required="required">
    </label>
    <br/>
    <label>
    Mot de passe: <br/><input class="input centrer" type="password" name="mdp1" placeholder="Entrez un mot de passe" '; if (isset($_POST['mdp1'])) {echo 'value="'.$_POST['mdp1'].'" ';} echo 'required="required">
    </label>
    <br/>
    <label>
    Confirmation: <br/><input class="input centrer" type="password" name="mdp2" placeholder="Entrez le même mot de passe" '; if (isset($_POST['mdp2'])) {echo 'value="'.$_POST['mdp2'].'" ';} echo 'required="required">
    </label>
    <br/>
    <label>
    <input type="checkbox" name="checkbox" required>
    Je suis fan de LOL
    </label>
    <br/>
    <input class="submit centrer" type="submit" name="submit" value="S\'inscrire">
    </fieldset>
    </form>
    ';
  }
  ?>

  </body>
  </html>
