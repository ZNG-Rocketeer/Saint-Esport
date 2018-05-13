<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../master.css">
  <title> Sainté E-sport </title>
</head>

<body>
  <!-- HEADER -->
  <?php include("../Include/entete_infos.php"); ?>
  <br/>
  <?php if (isset($_SESSION['pseudo']))
  {
      echo '
      <h3 class="centrer">Veuillez vous connecter pour poster une reponse</h3>
      ';
    }
    <!-- FOOTER -->
    <?php include("../Include/footer.php")?>

    </body>

    </html>
