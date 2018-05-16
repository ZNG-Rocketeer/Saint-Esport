<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="master.css">
  <link rel="shortcut icon" href="../Image/Emote_Scout_Approve.ico">
  <title> Forum | Zanga E-sport </title>
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
