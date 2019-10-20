<?php
    session_start();
    require_once 'view/head.php';
    $articles = unserialize(file_get_contents("./private/products.csv"));
?>
<body>
    <?php require_once 'view/menu.php'; ?>
    <div style="margin-top: 40px">
          <table class="tableau">
            <thead>
                <tr>
                    <td><b>Ref<b/></td>
                    <td>Category</td>
                    <td>Price</td>
                    <td>Stock</td>
                    <td>Image</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
    <?php   foreach ($articles as $key => $val)
            { ?>
                <tr>
                        <td><?php echo $val['ref'] ?></td>
                        <td><?php echo $val['category'] ?></td>
                        <td><?php echo $val['price'] ?>$</td>
                        <td><?php echo $val['stock'] ?></td>
                        <td><img style="max-width:250px; max-height:250px; text-align:center;" src="https://cdn.intra.42.fr/users/<?php echo $articles[$key]['img'];?>.jpg" alt="Image de <?php echo $articles[$key]['ref'];?>"></td>
                        <td>
                            <form  action="../model/action_basket.php" method="POST">
                                <input type="text" style="display: none;" name="ref" value="<?php echo $val['ref']?>">
                                <input style="float: right; width:100px;" type="submit" name="submit" class="button_in_form" value="add to card">
                            </form>
                        </td>
                    </tr>

    <?php   } ?>                
            </tbody>
           </table>
    </div>
</body>
</html>