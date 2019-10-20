<?php
    session_start();
    
    require_once 'menu.php';
    require_once 'head.php';

    if ($_SESSION['loggued_on_user'] && file_exists("../private/".$_SESSION['loggued_on_user']))
        $basket = unserialize(file_get_contents("../private/".$_SESSION['loggued_on_user']));
    else if (file_exists("../private/unsuscribe"))
        $basket = unserialize(file_get_contents("../private/"));
?>
    <header>
        <h3>Panier</h3>
    </header>
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
        <form action="../model/action_basket.php" method="POST">
             <input type="submit" name="purchase" value="purchase">
        </form>
    </div>
    </body>
</html>