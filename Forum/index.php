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
  <?php include("../Include/entete.php"); ?>
  <br>

  <?php
  if(!isset($_SESSION['pseudo'])){
    echo '<h2 class="centrer">Veuillez vous connecter!!</h2>';
  }
  else{
    echo '
    <div class="centrer"><a class="btn" href="new_discussion.php">Nouveau sujet</a></div>
    ';
  }
  ?>

  <table class="box">
    <tr>
      <thead class="box">
        <th class="box titre_sujet">Titre des sujets</th>
        <th class="box">Auteur</th>
        <th class="box">Date</th>
      </thead>
    </tr>
    <tr>

      <tbody class="box">
        <?php include 'liste_sujet.php'?>
      </tbody>
    </tr>
  </table>
  <br/>
  <!-- FOOTER -->
  <?php include("../Include/footer.php")?>
</body>
</html>
