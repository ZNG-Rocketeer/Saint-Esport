<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="master.css">
  <link rel="shortcut icon" href="/Image/Emote_Scout_Approve.ico">
  <title> Accueil | Zanga E-sport </title>
</head>

<body>
  <!-- HEADER -->
  <?php include("assets/entete.php"); ?>

  <br/>
  <div class="centrer box " style="display:table; margin:auto">
    <h2 class="centrer ">Bienvenue sur le site de ZNG-Esport.</h2>
    Vous trouverez ici toutes les informations nécessaires au bon déroulement de la lan ainsi que de ses modalités.
  </div>
  <br/>
  <section class="box centrer " style="display:table; margin:auto">
    <!-- AddToAny BEGIN -->
    <div class="a2a_kit a2a_kit_size_32 a2a_default_style centrer">
      <h3 class="centrer">
        N'hésitez pas à partager un maximum notre site !
      </h3>
      <a class="a2a_button_facebook"></a>
      <a class="a2a_button_twitter"></a>
      <a class="a2a_button_google_gmail"></a>
      <a class="a2a_button_email"></a>
      <a class="a2a_button_whatsapp"></a>
      <a class="a2a_button_facebook_messenger"></a>
    </div>
    <script>
    var a2a_config = a2a_config || {};
    a2a_config.linkname = "ZNG-Esport";
    a2a_config.linkurl = "zng-esport.tk:88";
    a2a_config.locale = "fr";
    </script>
    <script async src="https://static.addtoany.com/menu/page.js"></script>
    <!-- AddToAny END -->
  </section>
  <br/>
  <?php include("assets/footer.php")?>
</body>
</html>
