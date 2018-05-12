<?php

include '../pdo_init.php';
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
    <td>'.$result_discuss[$i]["contenu"].'</a></td>
    <td>'.$result_list_user['pseudo'].'</td>
    <td>'.$result_discuss[$i]["date"].'</td>';
    if($_SESSION['pseudo']==$result_list_user['pseudo'] && $result_discuss[$i]["supprimable"]){
      echo '<td><a href="delete_post.php?idpost='.$result_discuss[$i]["id_post"].'&idsuj='.$_GET['idsuj'].'">supprimer</a></td>';
    }
    echo '</tr>';
  }
}
?>
