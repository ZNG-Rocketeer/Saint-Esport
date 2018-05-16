<?php
include 'pdo_init.php';

if(isset($_POST['mdp']) && isset($_POST['pseudo'])){
  $sel = $pdo->prepare("SELECT * FROM zng_user WHERE pseudo = ? AND mdp = ? ");
  $sel->bindParam(1,$_POST['pseudo']);
  $sel->bindParam(2,md5($_POST['mdp']));
  $sel->execute();
  $res = $sel->fetchAll();
  $_SESSION['pseudo']=$res[0]['pseudo'];
  $_SESSION['mail']=$res[0]['mail'];
  $_SESSION['mdp']=$res[0]['mdp'];
  $_SESSION['niveau']=$res[0]['niveau_importance'];

  if($_SESSION['pseudo']==$_POST['pseudo'] && $_SESSION['mdp']==md5($_POST['mdp'])){
    echo '
    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <title>Connexion...</title>
    </head>
    <body>
    <script type="text/javascript">
    document.location.href="/";
    </script>
    <?php include("footer.php")?>
    </body>
    </html>
    ';
  }
  else{
    if ($_SESSION['pseudo']!=$_POST['pseudo']) {
      echo '<h2 class="centrer">Pseudo/Mot de passe Incorrect!</h2>';
    }
  }
}
?>
