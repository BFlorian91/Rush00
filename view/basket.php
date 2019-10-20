<?php

    include '../model/get_total.php';

    session_start();
    if ($_SESSION['loggued_on_user'] && file_exists("../private/".$_SESSION['loggued_on_user']))
        $basket = unserialize(file_get_contents("../private/".$_SESSION['loggued_on_user']));
    else if (file_exists("../private/unsuscribe"))
        $basket = unserialize(file_get_contents("../private/unsuscribe"));
    require_once 'menu.php';
    var_dump($basket);
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Basket</title>
        <link rel="stylesheet" type="text/css" href="../lib/style.css">
    </head>
    <body >
    <header>
        <h1>Panier</h1>
    </header>
    </body>
    <?php if ($basket) { ?>
    <div>
        <table class="tableau">
            <thead>
                <th>Produit</th>
                <th>Prix</th>
                <th>Quantité</th>
            </thead>
            <tbody>
                <?php foreach ($basket as $key => $value) {?>
                <tr>
                    <td><?php echo $basket[$key]['ref'];?></td>
                    <td><?php echo $basket[$key]['price'];?></td>
                    <td><?php echo $basket[$key]['stock'];?></td>
                    <td>
                        <form action="../model/action_basket.php" method="POST">
                            <input type="hidden" name="ref" value="<?php echo $basket[$key]['ref'];?>">
                            <input type="submit" name="submit" value="+">
                            <?php if ($basket[$key]['stock'] >= 2) {?>
                            <input type="submit" name="submit" value="-">
                            <?php }?>
                            <input type="submit" name="submit" value="delete">
                        </form>
                    </td>>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    <div>
        Total : <?php echo get_total()?>
        <form action="../model/action_basket.php" method="POST">
             <input type="submit" name="submit" value="purchase">
             <input type="submit" name="submit" value="empty">
        </form>
    </div>
    <?php } else {echo "Votre panier est vide\n";} ?>
    </body>
</html>