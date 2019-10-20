<?php
    session_start();

    require_once 'view/head.php';

    $products = unserialize(file_get_contents("./private/products.csv"));
    var_dump($products);
?>
<head>
    <meta charset="UTF-8">
    <title>Black Market</title>
</head>
<body>
    <?php require_once 'view/menu.php'; 
    echo $_SESSION['loggued_on_user'];
    ?>
    <form method="POST" action="model/action_basket.php">
    	<input type="hidden" name="ref" value="<?php echo $products[0]['ref'];?>">
    	produit : <?php echo $products[0]['ref'];?>
    	<input name="submit" value="add to card" type="submit"/>
    </form>
        <form method="POST" action="model/action_basket.php">
        <input type="hidden" name="ref" value="<?php echo $products[1]['ref'];?>">
        produit : <?php echo $products[1]['ref'];?>
        <input name="submit" value="add to card" type="submit"/>
    </form>
</body>
</html>