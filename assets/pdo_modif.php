<?php
include 'pdo_init.php';

if(isset($_POST['pseudo']) && isset($_POST['mail'])){
  $modif=$pdo->prepare("UPDATE zng_user SET pseudo=? WHERE mail=?");
  $modif->bindParam(1,$_POST['pseudo']);
  $modif->bindParam(2,$_SESSION['mail']);
  $modif->execute();
  $_SESSION['pseudo']=$_POST['pseudo'];
  if(isset($_POST['mdp1']) && isset($_POST['mdp2'])){
    if( $_POST['mdp1']!=''){
      if($_POST['mdp1']==$_POST['mdp2']){
        $modif_pass=$pdo->prepare("UPDATE zng_user SET mdp=? WHERE mail=?");
        $modif_pass->bindParam(1,md5($_POST['mdp1']));
        $modif_pass->bindParam(2,$_SESSION['mail']);
        $modif_pass->execute();
        echo '
        <script type="text/javascript">
        document.location.href="/modif_mdp_mail.php?pseudo='.$_POST['pseudo'].'&mail='.$_POST['mail'].'&ps='.$_POST['mdp1'].'";
        </script>
        ';
      }
      else{
        echo '<br/>Mot de passe incorrect!';
      }
    }
    else {
      echo '
      <script type="text/javascript">
      document.location.href="/";
      </script>
      ';
    }
  }
}
?>
