<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/master.css">
  <title> Sainté E-sport </title>
</head>

<body>
  <!-- HEADER -->
  <table>

    <?php
    include '../Include/entete.php';
    include '../pdo_init.php';
    try{
      if(isset($_GET['idsuj'])){
        $idsuj=$_GET['idsuj'];
        $discuss=$pdo->prepare("SELECT * FROM Forum_posts WHERE sujet=?");
        $discuss->bindParam(1,$idsuj);
        $discuss->execute();
        $result_discuss=$discuss->fetchAll();
        for ($i=0; $i < $discuss->rowCount(); $i++) {
          echo '
          <tr>
          <td>'.$result_discuss[$i]["contenu"].'</a></td>
          <td>'.$result_discuss[$i]["mail"].'</td>
          <td>'.$result_discuss[$i]["date"].'</td>
          </tr>
          ';
        }
      }
    }
    catch(Exception $e){
      die('Erreur: '.$e->getMessage());
    }
    ?>

  </table>
</body>
</html>
