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

  <form class="centrer" id="Form" name="new_discussion" action="new_discussion.php" method="post">
    <label>
      Titre du sujet <input type="text" name="sujet" placeholder="Entrez le titre du sujet" required="required">
    </label>
    <br/>
    <label>
      Premier Post <textarea rows="4" cols="50" name="post" placeholder="Contenu du post" required="required"></textarea>
    </label>

    <?php
    include 'pdo_new_topics.php';
    ?>
    <br/>
    <input type="submit" name="submit" value="Poster">
  </form>
</body>
</html>
