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
  <?php include("../Include/entete.php"); ?>
  <br/>
  <article>
    <h2> Partenaires </h2>
    <p>
      Voici les différents partenaires de la Zanga Esport !
    </p>
  </article>
  <div class="partenaire">
    <img src="../Image/Banniere_Twitch.jpg" class="twitch" alt="Twitch">
    <div class="lien">
      <p> Facebook </p>
    </div>
  </div>
  <div class="partenaire">
    <img src="../Image/Banniere_Zng.jpeg" class="zng" alt="Zanga">
    <div class="lien">
      <p> Facebook </p>
    </div>
  </div>  

    <!-- FOOTER -->
    <?php include("../Include/footer.php")?>
  </body>
  </html>
