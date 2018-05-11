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
    <a href="index.php"> <img class="Top-right" src="/Image/Logo_ASSE.png" alt="Sainte E-sport"> </a>
    <div class="Membre">
      <a class="Enregistrer" href="/inscription.php">S'inscrire</a>
    </br>
    <a class="Connexion" href="/connect.php">Connexion</a>
  </div>
  <h1 class="centrer"> SAINTE ESPORT </h1>

  <!-- BAR DE NAVIGATION  -->
  <nav class="nav-padding margin-top centrer">
    <a class="bar-espace" title="Accueil" href="index.php">ACCUEIL</a>
    <a class="bar-espace" title="Infos" href="/infos.html">INFOS</a>
    <a class="bar-espace" title="Partenaires" href="/partenaires/">PARTENAIRES</a>
    <a class="bar-espace" title="Contact" href="/contact/">CONTACT</a>
  </nav>
</header>

</br>

<?php
if(isset($_SESSION['pseudo'])){
  echo $_SESSION['pseudo'];
}

?>
<p> Bienvenue sur le site de Sainté Esport. </p>
<p> Vous trouverez ci-dessous toutes les informations nécessaires au bon déroulement d'une lan ainsi que de ses modalités. </p>

<aside>
  <p> Testez votre APM ici </p>
  <p> Fonction pour tester apm </p>
</aside>
<article>
  Article1</br>Blalbalbalablalbablalb</br>BLBlblabla
</article>
<article>
  Article2</br>fojiaefnpeifnaihdfzenbdpze</br>
  feoijenfeaun
</article>
<!-- FOOTER -->
<footer>
</footer>
</body>
</html>
