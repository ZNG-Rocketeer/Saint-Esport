<?php
include '../pdo_init.php';
/**echo $_SESSION['mail'];**/ /** Pas besoin de mettre le mail **/
if (isset($_POST['sujet']) && isset($_POST['post'])) {
  try{
    $new_topics = $pdo->prepare("INSERT INTO Forum_sujet(sujet,date,mail) VALUES ( ? , CURRENT_TIMESTAMP , ? )");
    $new_topics->bindParam(1,$_POST['sujet']);
    $new_topics->bindParam(2,$_SESSION['mail']);
    $new_topics->execute();

    $recup=$pdo->lastInsertId();

    $new_post =$pdo->prepare("INSERT INTO Forum_posts(sujet,date,mail,contenu,supprimable) VALUES ( ? , CURRENT_TIMESTAMP , ? , ? , 0)");
    $new_post->bindParam(1,$recup);
    $new_post->bindParam(2,$_SESSION['mail']);
    $new_post->bindParam(3,$_POST['post']);
    $new_post->execute();

  }
  catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
  }
}
?>
