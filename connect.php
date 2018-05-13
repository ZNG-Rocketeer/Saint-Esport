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
  <?php include("Include/entete.php"); ?>
  <br/>

  <?php
  include 'pdo_log.php';
  ?>

  <form class="centrer" name="connexion" action="connect.php" method="post">
    <fieldset>
      <legend><h2 class="centrer">Connexion</h2></legend>
      <label>
        Pseudo: <br><input class="input centrer" type="text" name="pseudo"  placeholder="Entrez votre Pseudo" required="required">
      </label>
      <br/>
      <label>
        Mot de passe: <br><input class="input centrer" type="password" name="mdp" placeholder="Entrez un mot de passe"required="required">
      </label>
      <br/>
      <input class="submit centrer" type="submit" name="submit" value="Connexion">
    </fieldset>
  </form>
</body>
</html>
