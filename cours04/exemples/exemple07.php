<?php
  $noExemple = 7;
?>

<!DOCTYPE html>
<html>
  <head>
    <title>
      <?php
        echo 'Exemple ';
        if ($noExemple < 10) {
          echo 0;
        }
        echo $noExemple;
      ?>
    </title>
  </head>
  <body>
    <?php
      $nombres = array();

      // Remplit le tableau avec les nombres de 1 à 20
      for ($i = 1; $i <= 20; $i++) {
        array_push($nombres, $i);
      }

      // Affiche le contenu du tableau
      foreach ($nombres as $nombre) {
        echo "$nombre <br />";
      }
    ?>
  </body>
</html>
