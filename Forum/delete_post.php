<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Suppression...</title>
</head>
<body>
  <?php
  include '../assets/pdo_init.php';
  try{
    $idpost=$_GET['idpost'];
    $verif=$pdo->prepare("SELECT supprimable FROM Forum_posts WHERE id_post=?");
    $verif->bindParam(1,$idpost);
    $verif->execute();
    $supprimable=$verif->fetch();

    if ($supprimable['supprimable']==1) {
      $delete_post=$pdo->prepare("DELETE FROM Forum_posts WHERE id_post=?");
      $delete_post->bindParam(1,$idpost);
      $delete_post->execute();
    }
  }
  catch(Exception $e){
    die('Erreur: '.$e->getMessage());
  }
  echo '
  <script type="text/javascript">
  document.location.href="/Forum/discussion_forum.php?idsuj='.$_GET['idsuj'].'";
  </script>';
  ?>
</body>
</html>
