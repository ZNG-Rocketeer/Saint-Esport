<?php
include '../assets/pdo_init.php';
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
      <tr>
      <td class="sujet" onclick="document.location.href=\'discussion_forum.php?idsuj='.$result_list[$i]['id_sujet'].'\'"><a href="discussion_forum.php?idsuj='.$result_list[$i]["id_sujet"].'">'.$result_list[$i]["sujet"].'</a></td>
      <td>'.$result_list_user['pseudo'].'</td>
      <td>'.$result_list[$i]["date"].'</td>';

      if(isset($_SESSION['niveau']) && $_SESSION['niveau']==0){
        echo '
        <td class="sujet" onclick="document.location.href=\'delete_forum.php?idsuj='.$result_list[$i]["id_sujet"].'\'"><a href="delete_forum.php?idsuj='.$result_list[$i]["id_sujet"].'">supprimer</a></td>
        </tr>
        ';
      }
    }
    else
    {
      echo '
      <tr>
      <td class="sujet" onclick="document.location.href=\'discussion_forum.php?idsuj='.$result_list[$i]['id_sujet'].'\'"><a href="discussion_forum.php?idsuj='.$result_list[$i]["id_sujet"].'">'.$result_list[$i]["sujet"].'</a></td>
      <td>'.$result_list_user['pseudo'].'</td>
      <td>'.$result_list[$i]["date"].'</td>';


      if(isset($_SESSION['niveau']) && $_SESSION['niveau']==0){
        echo '
        <td class="sujet" onclick="document.location.href=\'delete_forum.php?idsuj='.$result_list[$i]["id_sujet"].'\'"><a href="delete_forum.php?idsuj='.$result_list[$i]["id_sujet"].'">supprimer</a></td>
        </tr>
        ';
      }
    }
  }
}
catch(Exception $e){
  die('Erreur: '.$e->getMessage());
}
?>
