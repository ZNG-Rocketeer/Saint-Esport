<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../master.css">
  <link rel="shortcut icon" href="../Image/Emote_Scout_Approve.ico">
  <title> Partenaires | Zanga E-sport </title>
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
    <div class="partenaire box" onclick="document.location.href='https://www.twitch.tv/ihfisk' style="width:20%;height:20%"">
      <img src="../Image/twitch.png" alt="Twitch" style="width:100px;height:100px">
      <div class="lien">
        Twitch
      </div>
    </div>
    <div class="partenaire box" onclick="document.location.href='https://www.facebook.com/ZangaEsport/' style="width:20%;height:20%"">
      <img src="../Image/Banniere_Zng.jpeg"  alt="Zanga" style="width:100px;height:100px">
      <div class="lien">
        Facebook
      </div>
    </div>
  </div>
  <!-- FOOTER -->
  <?php include("../assets/footer.php")?>
</body>
</html>
