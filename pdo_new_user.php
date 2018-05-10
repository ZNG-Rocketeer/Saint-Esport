<?php

if (isset($_POST['pseudo']) && isset($_POST['mail']) && isset($_POST['mdp1']) && isset($_POST['mdp2'])) {
  $ins = $pdo->prepare("INSERT INTO zng_user values ( ? , ? , ? )");
  $sel_mail = $pdo->prepare("SELECT * FROM zng_user WHERE mail= ? ");
  $sel_mail->bindParam(1,$_POST['mail']);
  $sel_mail->execute();
  if($sel_mail->rowCount()==0){
    if($_POST['mdp1']==$_POST['mdp2']){
      $ins->bindParam(1,$_POST['pseudo']);
      $ins->bindParam(2,$_POST['mail']);
      $ins->bindParam(3,md5($_POST['mdp1']));
      $ins->execute();
    }
  }
  else {
    echo "Mail déjà utilisé";
  }
}

?>
