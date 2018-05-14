<?php
try{
  $pdo = new PDO('mysql:host=localhost;dbname=ESPORT', 'php', 'bla',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e){
  die('Erreur : ' . $e->getMessage());
}
?>
