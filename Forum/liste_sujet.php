<?php
include '../pdo_init.php';
try{
  $liste=$pdo->prepare("SELECT * FROM Forum_sujet");
  $liste->execute();
  $result_list=$liste->fetchAll();

  for ($i=0; $i < $liste->rowCount(); $i++) {
    echo '
    <tr>
    <td><a href="discussion_forum.php?idsuj='.$result_list[$i]["id_sujet"].'">'.$result_list[$i]["sujet"].'</a></td>
    <td>'.$result_list[$i]["mail"].'</td>
    <td>'.$result_list[$i]["date"].'</td>
    </tr>
    ';
  }
}
catch(Exception $e){
  die('Erreur: '.$e->getMessage());
}
?>
