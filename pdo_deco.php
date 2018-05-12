<?php
session_start();
  session_destroy();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Deconnexion</title>
  </head>
  <body>
    <script type="text/javascript">
      document.location.href="/";
    </script>
    <!-- FOOTER -->
    <?php include("/Include/footer.php")?>
  </body>
</html>
