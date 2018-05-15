<!-- INTERDIT D'AFFICHER SI UTILISATEUR PAS CONNECTE -->
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
  <?php
  include '../pdo_init.php';
  if (!(isset($_SESSION['pseudo']))) {
    echo '
    <h3 class="centrer">Vous devez être connecté
    pour voir cette page</h3>';
  }
  else{
    echo '
    <article>
    <h2> Inscription </h2>
    <p> Pour pouvoir participer à cette lan, vous devez avoir une team de 5 personnes et vous inscrire
    pour 25 euros.<br/>
    Après validation du paiement, vous recevrez un email confirmant votre inscription à la Zanga Esport.
    <br/>
    Bonne chance !
    </p>
    </article>
    <aside>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
      <input type="hidden" name="cmd" value="_s-xclick">
      <input type="hidden" name="hosted_button_id" value="LDQVHRAWACSQU">
      <input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
      <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
      </form>
      </aside>';
    }
    ?>
    <!-- FOOTER -->
    <?php include("../Include/footer.php")?>

    </body>

    </html>
