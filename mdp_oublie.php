<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
require 'vendor/autoload.php';
include 'assets/pdo_init.php';
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'zng.contact@gmail.com';                 // SMTP username
    $mail->Password = 'zanga_c_a_h';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('zng.contact@gmail.com','ZNG SUPPORT');
    $mail->addAddress($_GET['mail'], 'Unknown');     // Add a recipient
    $mail->addReplyTo('zng.contact@gmail.com','ZNG SUPPORT');

    $mdp=rand(1,9).rand(1,9).rand(1,9).rand(1,9).rand(1,9).rand(1,9).rand(1,9).rand(1,9).rand(1,9).rand(1,9);
    $chgmdp=$pdo->prepare("UPDATE zng_user SET mdp=? WHERE mail= ?");
    $chgmdp->bindParam(1,md5($mdp));
    $chgmdp->bindParam(2,$_GET['mail']);
    $chgmdp->execute();


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Nouveau mot de passe ZNG-ESPORT';
    $mail->Body    = 'Vous venez de vous signaler l\'oubli votre mot de passe <b>ZNG-ESPORT</b> <br/> Voici votre nouveau mot de passe: '.$mdp;
    $mail->AltBody = 'Vous venez de vous signaler l\'oubli votre mot de passe ZNG-ESPORT. Voici votre nouveau mot de passe: '.$mdp;

    $mail->send();
    echo 'Message has been sent';
    echo '
    <script type="text/javascript">
      document.location.href="/connect.php?envoi=1";
    </script>
    ';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
