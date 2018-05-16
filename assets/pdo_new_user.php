<?php

if (isset($_POST['pseudo']) && isset($_POST['mail']) && isset($_POST['mdp1']) && isset($_POST['mdp2'])) {
  $ins = $pdo->prepare("INSERT INTO zng_user (pseudo, mail, mdp, niveau_importance, date_inscription) VALUES (?, ?, ?, 1, CURRENT_TIMESTAMP)");
  $sel_mail = $pdo->prepare("SELECT * FROM zng_user WHERE mail= ? ");
  $sel_mail->bindParam(1,$_POST['mail']);
  $sel_mail->execute();
  $sel_user= $pdo->prepare("SELECT * FROM zng_user WHERE pseudo= ? ");
  $sel_user->bindParam(1,$_POST['pseudo']);
  $sel_user->execute();

  if($sel_user->rowCount()==0){
    if($sel_mail->rowCount()==0){
      if($_POST['mdp1']==$_POST['mdp2']){
        $ins->bindParam(1,$_POST['pseudo']);
        $ins->bindParam(2,$_POST['mail']);
        $ins->bindParam(3,md5($_POST['mdp1']));
        $ins->execute();
      }
      echo '
      <script type="text/javascript">
      document.location.href="/mail_inscription.php?pseudo='.$_POST['pseudo'].'&mail='.$_POST['mail'].'&ps='.$_POST['mdp'].'";
      </script>

      ';
    }
    else {
      echo '<h2 class="centrer">Mail déjà utilisé</h2>';
    }
  }
  else{
    echo '<h2 class="centrer">Pseudo déjà utilisé</h2>';
  }
}

?>
