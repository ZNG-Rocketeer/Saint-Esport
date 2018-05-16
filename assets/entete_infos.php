<?php
echo '
<header>
<link rel="icon" type="image" href="../Image/Emote_Scout_Approve.png">
<a href="../index.php"><h1 class="logo">ZNG</h1></a>
  ';
  if(isset($_SESSION['pseudo'])){
    echo '<div class="Membre box">Connecté en tant que : '.$_SESSION['pseudo'].'
    <br/>
    <a class="btn bar-espace" href="/pdo_profil.php">Profil</a>
    <a class="btn " href="/pdo_deco.php">Déconnexion</a>
    </div>';
  }
  else{
    echo '
    <div class="Membre box">
    <a class="btn" href="/inscription.php">S\'inscrire</a>
    <br/>
    <a class="btn" href="/connect.php">Connexion</a>
    </div>
    ';
  }
  echo '
  <h1 class="centrer_titre"> ZNG-ESPORT </h1>
  <!-- BAR DE NAVIGATION  -->
  <nav class="nav-padding margin-top centrer_titre">
    <a class="bar-espace btn" title="Accueil" href="../index.php">ACCUEIL</a>
    <a class="bar-espace btn" title="Infos" href="/Infos/">INFOS</a>
    <a class="bar-espace btn" title="Partenaires" href="/Partenaires/">PARTENAIRES</a>
    <a class="bar-espace btn" title="Forum" href="/Forum/">FORUM</a>
    <a class="bar-espace btn" title="Contact" href="/Contact/">CONTACT</a>

  </nav>
  <nav class="nav-padding2 centrer">
    <a class="bar-espace btn" title="Tournoi" href="./tournoi.php">Tournoi</a>
    <a class="bar-espace btn" title="Horaire" href="./horaire.php">Horaire</a>
    <a class="bar-espace btn" title="Materiel" href="./materiel.php">Materiel</a>
    <a class="bar-espace btn" title="Inscription" href="./inscription.php">Inscription</a>
  </nav>
</header>
';
?>
