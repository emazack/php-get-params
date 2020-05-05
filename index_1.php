<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ESECIZIO 1</title>
  </head>
  <body>

    <h1>ESERCIZIO 1</h1>

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
