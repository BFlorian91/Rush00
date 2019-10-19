<?php
    session_start();
    if ($_SESSION['loggued_on_user'] && file_exists("../private/".$_SESSION['loggued_on_user']))
        $basket = unserialize(file_get_contents("../private/".$_SESSION['loggued_on_user']));
    else if (file_exists("../private/unsuscribe"))
        $basket = unserialize(file_get_contents("../private/"));
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Basket</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body >
    <header>
        <h1>Panier</h1>
    </header>
    </body>
    <div>
        <table class="tableau">
            <thead>
                <th>Produit</th>
                <th>Prix</th>
                <th>Quantité</th>
            </thead>
            <tbody>
                liste des produits
            </tbody>
        </table>
    </div>
    <div>
        Total : code php
        <form action="action_basket.php" method="POST">
             <input type="submit" name="purchase" value="purchase">
        </form>
    </div>
    </body>
</html>