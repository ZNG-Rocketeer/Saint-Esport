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
    <tr>
      <th>Titre des sujet</th>
      <th>Auteur</th>
      <th>Date</th>
    </tr>
    <?php include 'liste_sujet.php'?>
  </table>
  <a href="new_discussion.php">add</a>
</body>
</html>
