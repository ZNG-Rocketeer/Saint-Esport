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
  <?php include '../Include/entete.php'; ?>
  <table>
    <?php
    include 'add_post.php';
    include 'affiche_post.php';
    ?>
  </table>
  <?php if (isset($_SESSION['pseudo'])) {
    echo '<form class="centrer" action="discussion_forum.php?idsuj='.$_GET['idsuj'].'" method="post">
    <textarea rows="4" cols="50" name="post" placeholder="Contenu du post" required="required"></textarea>

    <br/>
    <input type="submit" name="submit" value="Poster">

    </form>';
  }
  else {
    echo '
    <h3 class="centrer">Veuillez vous connecter pour poster une reponse</h3>
    ';
  }
  ?>
  <!-- FOOTER -->
  <?php include("../Include/footer.php")?>
</body>
</html>
