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
  <a href="new_discussion.php"><h4>add</h4></a>
  <table>
    <tr>
      <th>Titre des sujet</th>
      <th>Auteur</th>
      <th>Date</th>
    </tr>
    <?php include 'liste_sujet.php'?>
  </table>
</body>
</html>
