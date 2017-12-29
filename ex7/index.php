<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 7</title>
    </head>
    <body>
        <?php
        $departements = array(
            '02' => 'Aisne',
            '59' => 'Nord',
            '60' => 'Oise',
            '62' => 'Pas-de-Calais',
            '80' => 'Somme',
          );
          $departements['51'] = 'Marne';
          echo $departements['51'];
        ?>
    </body>
</html>
