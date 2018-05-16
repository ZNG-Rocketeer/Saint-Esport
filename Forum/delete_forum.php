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
    if(isset($_GET['idsuj'])){
      $delete_forum=$pdo->prepare("DELETE FROM Forum_sujet WHERE id_sujet=?");
      $delete_forum->bindParam(1,$_GET['idsuj']);
      $delete_forum->execute();
    }
  }
  catch(Exception $e){
    die('Erreur: '.$e->getMessage());
  }
  echo '
  <script type="text/javascript">
  document.location.href="/Forum/";
  </script>';
  ?>
</body>
</html>
