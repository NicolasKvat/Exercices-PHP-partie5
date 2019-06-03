<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice 8 PHP</title>
  </head>
  <body>
    <div class="container p-0">
      <header>
        <div class="row mb-4 p-4 bg-primary d-flex flex-column justify-content-center align-item-center">
          <h1 class="text-white m-2 text-center">Exercice 8</h1>
          <h4 class="text-white m-4 text-center">Faire une fonctionAvec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.</h4>
        </div>
      </header>
      <p class="text-center">
        <?php
        $months = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'];
        for ($i = 0; $i <= 11; $i++)
        {
          echo $months[$i] . '<br />';
        }
        ?>
      </p>
    </div>
  </body>
</html>
