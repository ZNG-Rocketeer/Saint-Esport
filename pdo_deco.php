<?php
session_start();
if(isset($_SESSION('pseudo'))){
  session_destroy();
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Deconnexion</title>
  </head>
  <body>
    <script type="text/javascript">
      document.location.href="index.php";
    </script>
  </body>
</html>
