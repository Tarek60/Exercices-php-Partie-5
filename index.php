<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 9</title>
    </head>
    <body>
        <?php
        $departements = array(
            02 => 'Aisne',
            59 => 'Nord',
            60 => 'Oise',
            62 => 'Pas-de-Calais',
            80 => 'Somme');
        foreach ($departements as $elements) {
            echo $elements;
            ?>
            <br/>
            <?php
        }
        ?>
    </body>
</html>
