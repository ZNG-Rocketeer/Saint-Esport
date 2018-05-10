<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="master.css">
  <title> Sainté E-sport </title>
</head>
<header>
  <h1 class="centrer"> SAINTE ESPORT with Zanga Esport </h1>
  <nav class="nav-padding margin-top centrer">
    <a class="bar-espace" title="Accueil" href="index.html">ACCUEIL</a>

    <a class="bar-espace" title="Actus" href="/actualites/">ACTUS</a>

    <a class="bar-espace" title="Médias" href="/photos/">MÉDIAS</a>

    <a class="bar-espace" title="Partenaires" href="/partenaires/">PARTENAIRES</a>

    <a class="bar-espace" title="L&#39;association" href="/association/">L&#39;ASSOCIATION</a>

    <a class="bar-espace" title="Contact" href="/contact/">CONTACT</a>
  </nav>
</header>
<body>
  <h2 class="centrer">Connexion</h2>
  <?php
  include 'pdo_init.php';
  include 'pdo_log.php';
  ?>
  <form class="centrer" name="inscription" action="connect.php" method="post">
    <label>
      Pseudo <input type="text" name="pseudo"  placeholder="Entrez votre Pseudo" required="required">
    </label>
    <br>
    <label>
      Mot de passe <input type="password" name="mdp" placeholder="Entrez un mot de passe"required="required">
    </label>
    <br>
    <input type="submit" name="submit" value="S'inscrire">
  </body>
  </html>
