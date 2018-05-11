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
  <header>
    <a href="index.php"> <img class="Top-left" src="/Image/Logo_ASSE.png" alt="Sainte E-sport"> </a>
    <?php
    if(isset($_SESSION['pseudo'])){
      echo '<div class="Membre">Connecté en tant que : '.$_SESSION['pseudo'].'
      <br>
      <a href="/pdo_deco.php">Deconnexion</a>
      </div>';
    }
    else{
      echo '
      <div class="Membre">
      <a class="Enregistrer" href="/inscription.php">inscrire</a>
      </br>
      <a class="Connexion" href="/connect.php">Connexion</a>
      </div>
      ';
    }
    ?>

    <h1 class="centrer"> SAINTE ESPORT </h1>


    <!-- BAR DE NAVIGATION  -->
    <nav class="nav-padding margin-top centrer">
      <a class="bar-espace" title="Accueil" href="index.php">ACCUEIL</a>
      <a class="bar-espace" title="Infos" href="/infos.php">INFOS</a>
      <a class="bar-espace" title="Partenaires" href="/partenaires/">PARTENAIRES</a>
      <a class="bar-espace" title="Contact" href="/contact/">CONTACT</a>
    </nav>
  <nav class="centrer">
    <a class="bar-espace" title="Tournoi" href="./Infos/tournoi.html">Tournoi</a>
    <a class="bar-espace" title="Horaire" href="./Infos/horaire.html">Horaire</a>
    <a class="bar-espace" title="Materiel" href="./Infos/materiel.html">Materiel</a>
    <a class="bar-espace" title="Inscription" href="./Infos/inscription.html">Inscription</a>
  </nav>
</header>

<h1 > LAN Party </h2>

<p> Venez à l’une des plus grandes LAN Party français où l’ambiance
  et les gens que vous rencontrerez vous ferons passer des moments exceptionnels.</br>
  Cette année, la Sainté Esport accueillera plus de 5000 participants!</br>
  Visitez cette belle ville qu'est Saint-Etienne pendant ces 3 jours de festivités et de compétitions! </p>

  <footer>
  </footer>
</body>





</html>
