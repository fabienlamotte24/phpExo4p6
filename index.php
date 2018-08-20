<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 5</title>
  </head>
  <body>
    <p>
        <?php
            if(!empty($_GET['language'])){
                //Affichage des paramètres
              echo $_GET['language'];
            } //Condition si le paramètre n'existe pas
              else {
                echo 'Le paramètre language est manquant !';
            }
            ?>
     <br />
        <?php
            if(!empty($_GET['server'])){
                //Affichage des paramètres
              echo $_GET['server'];
            } //Condition si le paramètre n'existe pas
              else {
                echo 'Le paramètre server est manquant !';
            }
        ?>
    </p>
  </body>
</html>
