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
  <?php include("../assets/entete.php"); ?>
  <br/>
  <div class="box centrer" style="display:table; margin:auto">
    <h2> Partenaires </h2>
    <p>
      Voici les différents partenaires de la Zanga Esport !
    </p>
    <div class="partenaire box" onclick="document.location.href='https://www.twitch.tv/ihfisk'">
      <img src="../Image/Banniere_Twitch.jpg" class="twitch" alt="Twitch">
      <div class="lien">
        <a class="lien_part" href="https://www.twitch.tv/ihfisk" >Twitch</a>
      </div>
    </div>
    <div class="partenaire box">
      <img src="../Image/Banniere_Zng.jpeg" class="zng" alt="Zanga">
      <div class="lien">
        <a class="lien_part" href="https://www.facebook.com/ZangaEsport/">Facebook</a>
      </div>
    </div>
  </div>
  <!-- FOOTER -->
  <?php include("../assets/footer.php")?>
</body>
</html>
