<?php
echo '
<header>
<link rel="icon" type="image" href="logo.png">
<a href="../index.php"><h1 class="logo">ZNG</h1></a>
';
if(isset($_SESSION['pseudo'])){
  echo '<div class="Membre box">Connecté en tant que : '.$_SESSION['pseudo'].'
  <br/>
  <a class="btn bar-espace" href="/pdo_profil.php">Profil</a>
  <a class="btn " href="/assets/pdo_deco.php">Déconnexion</a>
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
<a class="bar-espace btn" title="Contact" href="/Contact/">CONTACT</a>';

if(isset($_SESSION['niveau']) && $_SESSION['niveau']==0){
  echo '
  <a class="bar-espace btn" title="Contact" href="/">UTILISATEUR</a>
  ';
}
echo '
</nav>
</header>
';
?>
