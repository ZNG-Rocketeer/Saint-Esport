<?php
  if(isset($_POST['mdp']) && isset($_POST['pseudo'])){
      $sel = $pdo->prepare("SELECT * FROM zng_user WHERE pseudo = ? AND mdp = ? ");
      $sel->bindParam(1,$_POST['pseudo']);
      $sel->bindParam(2,md5($_POST['mdp']));
      $sel->execute();
      $res = $sel->fetch();
      print_r($res['pseudo']);
      $_SESSION['pseudo']=$res['pseudo'];
  }
 ?>
