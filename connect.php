<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="master.css">
  <link rel="shortcut icon" href="../Image/Emote_Scout_Approve.ico">
  <title> Connexion | Zanga E-sport </title>
</head>

<body>
  <!-- HEADER -->
  <?php include("assets/entete.php"); ?>
  <br/>

  <?php
  include 'assets/pdo_log.php';
  ?>
  <?php
  if(isset($_GET['envoi'])){
    echo '<h2 class="centrer">Votre nouveau mot de passe vous a été envoyé!</h2>';
  }
  if(isset($_GET['mdpoublie'])){
    echo'
    <form class="centrer" name="oubli" action="connect.php?mdpoublie=1" method="post">
    <fieldset class="box">
    include 'mdp_oublie.php';
    <legend><h2 class="centrer">Mot de passe Oublié</h2></legend>
    <label>
    Mail: <br/><input class="input centrer" type="text" name="mail"  placeholder="Entrez votre adresse mail" required="required">
    </label>
    <br/>
    <input class="submit centrer" type="submit" name="submit" value="Soumettre">
    </fieldset>
    </form>';
  }
  else{
    echo'
    <form class="centrer" name="connexion" action="connect.php" method="post">
    <fieldset class="box">
    <legend><h2 class="centrer">Connexion</h2></legend>
    <label>
    Pseudo: <br/><input class="input centrer" type="text" name="pseudo"  placeholder="Entrez votre Pseudo" required="required">
    </label>
    <br/>
    <label>
    Mot de passe: <br/><input class="input centrer" type="password" name="mdp" placeholder="Entrez un mot de passe"required="required">
    </label>
    <br/>
    <div class="box sujet" style="display:table; margin:auto" onclick="document.location.href=\'connect.php?mdpoublie=1\'">Mot de passe oublié?</div>
    <br/>
    <input class="submit centrer" type="submit" name="submit" value="Connexion">
    </fieldset>
    </form>';
  }
  ?>
  <!-- FOOTER -->
  <?php include("Include/footer.php")?>
</body>
</html>
