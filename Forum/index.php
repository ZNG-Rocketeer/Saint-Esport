<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/master.css">
  <link rel="shortcut icon" href="../Image/Emote_Scout_Approve.ico">
  <title> Forum | Zanga E-sport </title>
</head>

<body>
  <!-- HEADER -->
  <?php include("../assets/entete.php"); ?>
  <br/>
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
    <thead class="box">
      <tr>
        <th class="box titre_sujet">Titre des sujets</th>
        <th class="box">Auteur</th>
        <th class="box">Date</th>
      </tr>
    </thead>
    <tbody class="box">
    <tr>
        <?php include 'liste_sujet.php'?>
    </tr>
    </tbody>
  </table>
  <br/>
  <!-- FOOTER -->
  <?php include("../assets/footer.php")?>
</body>
</html>
