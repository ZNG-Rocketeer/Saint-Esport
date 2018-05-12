<?php
include '../pdo_init.php';
try{
  $liste=$pdo->prepare("SELECT * FROM Forum_sujet");
  $liste_user=$pdo->prepare("SELECT pseudo FROM zng_user WHERE mail= ?");
  $liste->execute();
  $result_list=$liste->fetchAll();

  for ($i=0; $i < $liste->rowCount(); $i++) {
    $liste_user->bindParam(1,$result_list[$i]["mail"]);
    $liste_user->execute();
    $result_list_user=$liste_user->fetch();
    if($i % 2 == 0)
    {
      echo '
      <tr class="pair">
      <td><a href="discussion_forum.php?idsuj='.$result_list[$i]["id_sujet"].'">'.$result_list[$i]["sujet"].'</a></td>
      <td>'.$result_list_user['pseudo'].'</td>
      <td>'.$result_list[$i]["date"].'</td>
      </tr>
      ';
    }
    else
    {
      echo '
      <tr class="impair">
      <td><a href="discussion_forum.php?idsuj='.$result_list[$i]["id_sujet"].'">'.$result_list[$i]["sujet"].'</a></td>
      <td>'.$result_list_user['pseudo'].'</td>
      <td>'.$result_list[$i]["date"].'</td>
      </tr>
      ';
    }
  }
}
catch(Exception $e){
  die('Erreur: '.$e->getMessage());
}
?>
