<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ESERCIZIO 2</title>
  </head>
  <body>
    <h2>ESERCIZIO 2</h2>
    
    <?php
    $email = $_GET["email"];
     ?>

     <h2>
       <?php
       if (strpos($email, '.') && strpos($email, '@') ) {
         echo "<div> OK </div>";
       } else {
         echo "<div> KO </div>";
       }

        ?>
     </h2>


  </body>
</html>
