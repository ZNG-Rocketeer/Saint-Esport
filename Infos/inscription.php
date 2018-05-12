<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../master.css">
  <title> Sainté E-sport </title>
</head>

<body>
  <?php include("../Include/entete_infos.php"); ?>
<br/>
<?php include '../pdo_init.php'; ?>
<?php if (isset($_SESSION['pseudo'])) {
  echo'
  <article>
  <h1 > Inscription </h1>
  <p> La lan se déroulera au Palais des Spectables de Saint-Etienne situé
  au 31 Boulevard Jules Janin, 42100 Saint-Étienne.
  <br/>
  Elle aura lieu du <strong>Vendredi18 Mai</strong> 18h au <strong>Lundi 21 Mai</strong> 14h<br/>
  </p>
  </article>
  <aside>
  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="LDQVHRAWACSQU">
    <input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
    <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
    </form>
    </aside>'
  }
  else {
    echo '
    <h3 class="centrer">Veuillez vous connecter pour poster une reponse</h3>
    ';
  }
  ?>
  <!-- FOOTER -->
  <?php include("../Include/footer.php")?>

</body>

</html>
