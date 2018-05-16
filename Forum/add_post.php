<?php
include '../assets/pdo_init.php';
try{


  if (isset($_POST['post'])) {
    $new_post=$pdo->prepare("INSERT INTO Forum_posts(contenu,sujet,date,mail) VALUES (?,?,CURRENT_TIMESTAMP,?)");
    $new_post->bindParam(1,$_POST['post']);
    $new_post->bindParam(2,$_GET['idsuj']);
    $new_post->bindParam(3,$_SESSION['mail']);
    $new_post->execute();

    echo '
    <script type="text/javascript">
    document.location.href="/Forum/discussion_forum.php?idsuj='.$_GET['idsuj'].'";
    </script>
    ';
  }
}
catch(Exception $e){
  die('Erreur: '.$e->getMessage());
}
?>
