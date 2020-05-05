<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ESECIZIO 1</title>
  </head>
  <body>

    <?php
    $name = $_GET["name"];
    $surname = $_GET["surname"];
     ?>

     <h2>
       Benvenuto
       <?php
       echo $name . " " . $surname;
       ?>
     </h2>
  </body>
</html>
