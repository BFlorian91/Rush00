<?php

    function display_articles()
    {
        $articles = unserialize(file_get_contents("../private/products.csv"));
?>      <table class="value_table">
            <tr>
                <td><b>Ref<b/></td>
                <td>Category</td>
                <td>Price</td>
                <td>Stock</td>
                <td>Image</td>
            </tr>
    <?php   foreach ($articles as $key => $val)
            { ?>
                <tr>
                    <tbody>
                        <td class="value_table"><?php echo $val['ref'] ?></td>
                        <td class="value_table"><?php echo $val['category'] ?></td>
                        <td class="value_table"><?php echo $val['price'] ?></td>
                        <td class="value_table"><?php echo $val['stock'] ?></td>
                        <td class="value_table"><?php echo $val['img'] ?></td>
                    <form action="../model/action_remove_articles.php" method="POST">
                        <input type="text" style="display: none;" name="ref" value="<?php echo $val['ref']?>">
                        <input style="float: right; width:100px;" type="submit" class="button_in_form" value="remove">
                    </form>
                    <form action="edit_articles.php" method="POST">
                        <input type="text" style="display: none;" name="ref" value="<?php echo $val['ref']?>">
                        <input type="text" style="display: none;" name="category" value="<?php echo $val['category']?>">
                        <input type="text" style="display: none;" name="price" value="<?php echo $val['price']?>">
                        <input type="text" style="display: none;" name="stock" value="<?php echo $val['stock']?>">
                        <input type="text" style="display: none;" name="img" value="<?php echo $val['img']?>">
                        <input style="float: right; width:100px; margin-right: 10px;" type="submit" class="button_in_form" value="edit">
                    </form>
                    </tbody>
                </tr>
                </table>
<?php       }
    }