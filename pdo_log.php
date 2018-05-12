<?php
if(isset($_POST['mdp']) && isset($_POST['pseudo'])){
  $sel = $pdo->prepare("SELECT * FROM zng_user WHERE pseudo = ? AND mdp = ? ");
  $sel->bindParam(1,$_POST['pseudo']);
  $sel->bindParam(2,md5($_POST['mdp']));
  $sel->execute();
  $res = $sel->fetchAll();
  $_SESSION['pseudo']=$res[0][0];
  $_SESSION['mail']=$res[0][1];
  echo '
  <!DOCTYPE html>
  <html>
  <head>
  <meta charset="utf-8">
  <title>Connexion</title>
  </head>
  <body>
  <script type="text/javascript">
  document.location.href="/";
  </script>
  <?php include("Include/footer.php")?>
  </body>
  </html>
  ';
}
?>
