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
  <?php include("Include/entete.php"); ?>
  <br/>
  <?php
  if($_POST['mdp1']!=''){
    if($_POST['mdp1']==$_POST['mdp2']){
      if ($_SESSION['mdp']!=$_POST['mdp1']) {
        echo '
        <h2 class="centrer">Mot de passe Modifié</h2>
        ';
        $_SESSION['mdp']=$_POST['mdp1'];
      }
    }
  }
  ?>
  <form class="centrer" name="Profil" action="pdo_profil.php" method="post">

    <fieldset class="box">
      <fieldset class="box">
        <legend><h2 class="centrer">Profil</h2></legend>
        <label>
          Pseudo: <br><input class="input centrer" type="text" name="pseudo" <?php echo 'value="'.$_SESSION['pseudo'].'"';?> required="required">
        </label>
        <br>
        <label>
          Adresse Mail: <br><input class="input centrer" type="email" name="mail" <?php echo 'value="'.$_SESSION['mail'].'"';?> required="required" readonly>
          <br>
        </fieldset>
        <br>
        <br>
        <fieldset class="box">
          <legend><h2 class="centrer">Modification Mot de Passe </h2></legend>
          <label>
            Mot de passe: <br><input class="input centrer" type="password" name="mdp1" placeholder="Entrez un mot de passe">
          </label>
          <br>
          <label>
            Confirmation: <br><input class="input centrer" type="password" name="mdp2" placeholder="Entrez le même mot de passe">
          </label>
          <?php include 'pdo_modif.php'; ?>
        </fieldset>

        <input class="submit centrer" type="submit" name="submit" value="Valider">
      </fieldset>

    </form>
  </body>
  </html>
