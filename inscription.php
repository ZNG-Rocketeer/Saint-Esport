<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="master.css">
  <title> Sainté E-sport </title>
</head>

<body>
  <!-- HEADER -->
  <?php include("Include/entete.php");
  if(isset($_SESSION['pseudo'])){
    echo $_SESSION['pseudo'];
  }

  ?>
  <h2 class="centrer">Inscription</h2>
  <form class="centrer" name="inscription" action="inscription.php" method="post">
    <label>
      Pseudo <input type="text" name="pseudo"  placeholder="Entrez votre Pseudo" <?php if (isset($_POST['pseudo'])) {echo 'value="'.$_POST['pseudo'].'" ';} ?> required="required">
    </label>
    <br/>
    <label>
      Adresse Mail <input type="email" name="mail" placeholder="Entrez votre E-mail" required="required">
    </label>
    <?php
    include 'pdo_init.php';
    include 'pdo_new_user.php';
    ?>
    <br/>
    <label>
      Mot de passe <input type="password" name="mdp1" placeholder="Entrez un mot de passe"<?php if (isset($_POST['mdp1'])) {echo 'value="'.$_POST['mdp1'].'" ';} ?> required="required">
    </label>
    <br/>
    <label>
      Confirmation <input type="password" name="mdp2" placeholder="Entrez le même mot de passe" <?php if (isset($_POST['mdp2'])) {echo 'value="'.$_POST['mdp2'].'" ';} ?>required="required">
    </label>
    <br/>
    <input type="submit" name="submit" value="S'inscrire">
  </form>
  
  <!-- FOOTER -->
  <?php include("/Include/footer.php")?>
</body>
</html>
