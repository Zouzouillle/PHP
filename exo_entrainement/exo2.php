<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Les variables et les opérations - Exercice 2</title>
    </head>

    <body>

    <form action="exo2.php" method="post">
        <input type="number" name="c" />
        <input type="submit" value="calculer" />
    </form>

    <?php

    if ($_SERVER ['REQUEST_METHOD'] === 'POST' && !empty ($_POST) ) {

        function temperature ($C) {
            return 9*$C/5+32;
        };

        echo temperature ($_POST["c"]);
    }

    ?>
    </body>
</html>

<!-- Écrivez le code PHP qui affiche la température en Fahrenheit à partir d’une
température en Celsius. (F=9C/5+32) -->