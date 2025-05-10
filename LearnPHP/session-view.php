<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if(isset($_SESSION["favcolor"])){
        echo "Favorite Color : " . $_SESSION["favcolor"];
      }
     ?>
  </body>
</html>
