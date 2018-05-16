<!-- INTERDIT D'AFFICHER SI UTILISATEUR PAS CONNECTE -->
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../master.css">
  <link rel="shortcut icon" href="../Image/Emote_Scout_Approve.ico">
  <title> Infos | Zanga E-sport </title>
</head>

<body>
  <!-- HEADER -->
  <?php include("../assets/entete_infos.php"); ?>
  <br/>
  <?php
  include '../assets/pdo_init.php';
  if (!(isset($_SESSION['pseudo']))) {
    echo '
    <h3 class="centrer">Vous devez être connecté
    pour accéder à cette page.</h3>';
  }
  else{
    echo '
    <div class="box" style="display:table; margin:auto">
      <h2 class="centrer"> Inscription </h2>
      <p> Pour pouvoir participer à cette lan, vous devez avoir une team de 5 personnes et vous inscrire
        pour 25 euros.<br/>
        Après validation du paiement, vous recevrez un email confirmant votre inscription à la Zanga Esport.
        <br/>
        Bonne chance !
      </p>
    </div>
    <br>
    <div class="box" style="display:table; margin:auto">
      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="LDQVHRAWACSQU">
        <input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
        <img alt="" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
      </form>
    </div>';
    }
    ?>
    <!-- FOOTER -->
    <?php include("../assets/footer.php")?>

    </body>

    </html>
