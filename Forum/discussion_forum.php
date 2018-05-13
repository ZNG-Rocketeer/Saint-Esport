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
  <table>
    <?php
    include 'add_post.php';
    include 'affiche_post.php';
    ?>
  </table>
  <?php if (isset($_SESSION['pseudo'])) {
    echo '<form class="centrer" action="discussion_forum.php?idsuj='.$_GET['idsuj'].'" method="post">
    <fieldset>
    <legend><h2 class="centrer">Nouveau Commentaire</h2></legend>
    <textarea class="input centrer" rows="4" cols="50" name="post" placeholder="Contenu du post" required="required"></textarea>

    <br/>
    <input class="submit centrer" type="submit" name="submit" value="Poster">
    </fieldset>
    </form>';
  }
  else {
    echo '
    <h3 class="centrer">Veuillez vous connecter pour poster une reponse</h3>
    ';
  }
  ?>
</body>
</html>
