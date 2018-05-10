<?php session_start(); ?>
<html>


<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="master.css">
  <title> Sainté E-sport </title>
</head>


<body>
  <!-- HEADER -->
  <header>
    <div class="Membre">
      <a class="Enregistrer" href="/inscription.php">S'inscrire</a>
    </br>
    <a class="Connexion" href="/connect.php">Connexion</a>
  </div>
  <h1 class="centrer"> SAINTE ESPORT </h1>

  <!-- BAR DE NAVIGATION  -->
  <nav class="nav-padding margin-top centrer">
    <a class="bar-menu" title="Accueil" href="index.php">ACCUEIL</a>
    <a class="bar-menu" title="Infos" href="/actualites/">ACTUS</a>
    <a class="bar-menu" title="Partenaires" href="/partenaires/">PARTENAIRES</a>
    <a class="bar-menu" title="Contact" href="/contact/">CONTACT</a>
  </nav>
</header>
<?php
if(isset($_SESSION['pseudo'])){
  echo $_SESSION['pseudo'];
}

?>
<p> Bienvenue sur le site de Sainté Esport </p>
<p> Sur ce site, vous pouvez trouver toutes les informations nécessaires au bon déroulement d'une lan ainsi que de ses modalités. </p>

<section>
</section>

<!-- FOOTER -->
<footer>
</footer>
</body>
</html>
