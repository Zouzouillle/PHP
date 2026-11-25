<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Ex2</title>
    </head>

    <body>

    <form action="exo3.php" method="post">
        <input type="number" name="nb1" />
        <input type="number" name="nb2" />
        <input type="submit" value="calculer" />
    </form>

    <?php

    if ($_SERVER ['REQUEST_METHOD'] === 'POST' && !empty ($_POST) ) {


    $nb1 = $_POST['nb1'];
    $nb2 = $_POST['nb2'];



    }

    ?>
    </body>
</html>

<!-- Les variables $nb1 et $nb2 comportent chacune un nombre entier. Affi-
chez le plus petit et le plus grand nombre. Que faire en cas d’égalité ? -->