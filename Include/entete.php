<header>
  <a href="../index.php"> <img class="Top-left" src="/Image/Logo_ASSE.png" alt="Sainte E-sport"> </a>
  <?php
  if(isset($_SESSION['pseudo'])){
    echo '<div class="Membre">Connecté en tant que : '.$_SESSION['pseudo'].'
    <br/>
    <a class="Deconnexion" href="/pdo_deco.php">Deconnexion</a>
    </div>';
  }
  else{
    echo '
    <div class="Membre">
    <a class="enregistrer" href="/inscription.php">S\'inscrire</a>
    <br/>
    <a class="connexion" href="/connect.php">Connexion</a>
    </div>
    ';
  }
  ?>
  <h1 class="centrer"> SAINTE ESPORT </h1>
  <!-- BAR DE NAVIGATION  -->
  <nav class="nav-padding margin-top centrer">
    <a class="bar-espace" title="Accueil" href="../index.php">ACCUEIL</a>
    <a class="bar-espace" title="Infos" href="/Infos/">INFOS</a>
    <a class="bar-espace" title="Partenaires" href="/Partenaires/">PARTENAIRES</a>
    <a class="bar-espace" title="Forum" href="/Forum/">FORUM</a>
    <a class="bar-espace" title="Contact" href="/Contact/">CONTACT</a>

  </nav>
</header>
