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
  <?php include("entete.php"); ?>
  <br/>
  <table class="box">
    <tr>
      <thead class="box">
        <th class="box titre_sujet">Pseudo</th>
        <th class="box">mail</th>
        <th class="box">Date</th>
      </thead>
    </tr>
    <tr>

      <tbody class="box">

        <?php
        include "pdo_init.php";


        if(isset($_SESSION['niveau']) && $_SESSION['niveau']==0){
          if(isset($_GET['mail'])){
            $suppr=$pdo->prepare("DELETE FROM zng_user WHERE mail=?");
            $suppr->bindParam(1,$_GET['mail']);
            $suppr->execute();
          }
          $liste_uti=$pdo->prepare("SELECT * FROM zng_user");
          $liste_uti->execute();
          $user=$liste_uti->fetchAll();

          for ($i=0; $i < $liste_uti->rowCount(); $i++) {
            if($_SESSION['pseudo']!=$user[$i]['pseudo'])
            echo '
            <tr>
            <td><a>'.$user[$i]['pseudo'].'</a></td>
            <td>'.$user[$i]['mail'].'</td>
            <td>'.$user[$i]['date_inscription'].'</td>
            <td class="sujet" onclick="document.location.href=\'pdo_utilisateur.php?mail='.$user[$i]['mail'].'\'"><a>Bannir</a></td>
            ';
          }
        }
        ?>
      </tbody>
    </tr>
  </table>
  <br/>
  <!-- FOOTER -->
  <?php include("footer.php")?>
</body>
</html>
