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
  <div class="centrer"><a class="btn" href="new_discussion.php">Nouveau sujet</a></div>
  <table>
    <tr>
      <thead>
        <th>Titre des sujet</th>
        <th>Auteur</th>
        <th>Date</th>
      </thead>
    </tr>
    <?php include 'liste_sujet.php'?>
  </table>
</body>
</html>
