<html>
    <head>
        <title>Exercice 10</title>
    </head>
    <body>
        <?php
        $departements = array(
            '02' => 'Aisne',
            '59' => 'Nord',
            '60' => 'Oise',
            '62' => 'Pas-de-Calais',
            '80' => 'Somme');
        foreach ($departements as $cle => $elements) {
            echo 'Le département ' . $elements . ' a le numéro ' . $cle;
            ?>
            <br/>
            <?php
        }
        ?>
    </body>
</html>
