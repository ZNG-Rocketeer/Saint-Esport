<?php

include '../assets/pdo_init.php';
#affiche le contenu du sujet
if(isset($_GET['idsuj'])){
  $liste_user=$pdo->prepare("SELECT pseudo FROM zng_user WHERE mail= ?");
  $discuss=$pdo->prepare("SELECT * FROM Forum_posts WHERE sujet=?");
  $discuss->bindParam(1,$_GET['idsuj']);
  $discuss->execute();
  $result_discuss=$discuss->fetchAll();
  for ($i=0; $i < $discuss->rowCount(); $i++) {
    $liste_user->bindParam(1,$result_discuss[$i]["mail"]);
    $liste_user->execute();
    $result_list_user=$liste_user->fetch();
    echo '
    <tr>
    <td><textarea class="box" cols=70 rows=5 readonly>'.$result_discuss[$i]["contenu"].'</textarea></td>
    <td>'.$result_list_user['pseudo'].'</td>
    <td>'.$result_discuss[$i]["date"].'</td>';
    if(($_SESSION['pseudo']==$result_list_user['pseudo'] && $result_discuss[$i]["supprimable"]) || $_SESSION['niveau']==0){
      echo '<td class="sujet" onclick="document.location.href=\'delete_post.php?idpost='.$result_discuss[$i]["id_post"].'&idsuj='.$_GET['idsuj'].'\'">supprimer</td>';
    }
    echo '</tr>';
  }
}
?>
