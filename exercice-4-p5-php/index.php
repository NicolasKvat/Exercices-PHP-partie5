<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice 4 PHP</title>
  </head>
  <body>
    <div class="container p-0">
      <header>
        <div class="row mb-4 p-4 bg-primary d-flex justify-content-center align-item-center">
          <h1 class="text-white m-2">Exercice 4</h1>
          <h4 class="text-white m-4 text-center">Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.</h4>
        </div>
      </header>
      <p class="text-center">
        <?php
        $months = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre'];
        $months[7] = 'août';
        echo $months[7];
        ?>
      </p>
    </div>
  </body>
</html>
