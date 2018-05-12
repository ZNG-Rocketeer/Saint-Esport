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

  <h2 class="centrer">Connexion</h2>
  <?php
  include 'pdo_init.php';
  include 'pdo_log.php';
  ?>
  <form class="centrer" name="connexion" action="connect.php" method="post">
    <label>
      Pseudo <input type="text" name="pseudo"  placeholder="Entrez votre Pseudo" required="required">
    </label>
    <br/>
    <label>
      Mot de passe <input type="password" name="mdp" placeholder="Entrez un mot de passe"required="required">
    </label>
    <br/>
    <input type="submit" name="submit" value="Connexion">
  </body>
  </html>
