<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Les conditions - Exercice 4</title>
    </head>

    <body>

    <form action="exo4.php" method="post">
        <input type="number" name="nb1" />
        <input type="submit" value="calculer" />
    </form>

    <?php

    if ($_SERVER ['REQUEST_METHOD'] === 'POST' && !empty ($_POST) ) {


        $nb1 = $_POST['nb1'];

        if ($nb1 %2 == 0) {
            echo "Le nombre est Pair";
        } else {
            echo "Le nombre est Impair";          
        }
    }

    ?>
    </body>
</html>
