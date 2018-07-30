<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 5</title>
  </head>
  <body>
    <p>
<?php
/*Vérification des paramètres de l'url*/
if(isset($_GET['language']) && isset($_GET['server'])){
  /*Affichage des paramètres*/
  echo $_GET['language'] . ' ' . $_GET['server'];
}
?>
    </p>
  </body>
</html>
