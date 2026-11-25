<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Les conditions - Exercice 5</title>
    </head>

    <body>

    <form action="exo5.php" method="post">
        <input type="number" name="nb1" />
        <input type="submit" value="calculer" />
    </form>

    <?php

    if ($_SERVER ['REQUEST_METHOD'] === 'POST' && !empty ($_POST) ) {


        $nb1 = $_POST['nb1'];

        if (($nb1 %4 == 0 && $nb1 %100 != 0 )|| $nb1 %100 == 0) {
            echo "L'année est bissextiles";
        } else {
            echo "L'année n'est pas bissextiles";
        }
    }



    ?>
    </body>
</html>

