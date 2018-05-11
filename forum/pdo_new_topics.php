<?php
echo $_SESSION['mail'];
if (isset($_POST['sujet']) && isset($_POST['post'])) {
  try{
    $new_topics = $pdo->prepare("INSERT INTO Forum_sujet(sujet, mail) VALUES (?,?)");
    $new_topics->bindParam(1,$_POST['sujet']);
    $new_topics->bindParam(2,$_SESSION['mail']);
    $new_topics->execute();
  }
  catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
  }
}
?>
