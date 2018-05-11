<?php
echo $_SESSION['mail'];
if (isset($_POST['sujet']) && isset($_POST['post'])) {
  try{
    $new = $pdo->prepare("INSERT INTO Forum_sujet(sujet, mail) VALUES (?,?)");
    $new->bindParam(1,$_POST['sujet']);
    $new->bindParam(2,$_SESSION['mail']);
    $new->execute();
  }
  catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
  }
}
?>
