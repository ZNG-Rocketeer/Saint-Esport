<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="master.css">
  <title> Sainté E-sport </title>
</head>

<body>
  <!-- HEADER -->
  <?php include("assets/entete.php"); ?>

  <?php
  try{
    require_once "Mail.php";
    require_once "Mail/mime.php";
    echo '$_GET["pseudo"]';

    $from = "ZNG SUPPORT <zng.contact@gmail.com>";
    $to = $_GET['pseudo']." <".$_GET['mail']."> ";
    $subject = "Hi!";
    $body = "Hi,\n\nHow are you?";
    $host = "smtp.gmail.com";
    $port = "587";
    $username = "zng.contact@gmail.com";
    $password = "zanga_c_a_h";

    $headers = array ('From' => $from,
    'To' => $to,
    'Subject' => $subject);
    $smtp = Mail::factory('smtp',
    array ('host' => $host,
    'port' => $port,
    'auth' => true,
    'username' => $username,
    'password' => $password));

    $mail = $smtp->send($to, $headers, $body);

    if (PEAR::isError($mail)) {
      echo("<p>" . $mail->getMessage() . "</p>");
    } else {
      echo("<p>Message successfully sent!</p>");
    }
  }
  catch(Exception $e){
    die('Erreur: '.$e->getMessage());
  }
  ?>
</body>
</html>
