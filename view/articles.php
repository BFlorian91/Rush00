<?php 
    require_once 'menu.php';
    require_once '../model/display_articles.php';
?>
<div class="container_pannel">
    <div class="forms">
        <h3>ADD ARTICLES</h3>
        <form action="/model/action_add_article.php" method="POST">
            <label>Nom de l'article:</label>
            <input type="text" name="ref" placeholder="nom">
            <br />
            <label>Categorie</label>
            <input type="text" name="category" placeholder="categorie">
            <br />
            <label>Prix</label>
            <input type="number" name="price" placerholder="prix">
            <br />
            <label>Quantité</label>
            <input type="number" name="quantity" placeholder="quantité">
            <br />
            <label>42-login</label>
            <input type="text" name="42-login" placeholder="42-login">
            <br />
            <input type="submit" name="submit">
        </form>
    </div>

    <div class="forms">
        <h3>REMOVE ARTICLE</h3>
        <form action="/model/action_remove_articles.php" method="POST">
            <label>Nom de l'article:</label>
            <input type="text" name="ref" placeholder="nom">
            <br />
            <input type="submit" name="submit">
        </form>
    </div>

    <div class="forms">
        <h3>REMOVE CATEGORY</h3>
        <form action="/model/action_remove_articles.php" method="POST">
            <label>Nom de la categorie:</label>
            <input type="text" name="category" placeholder="categorie">
            <br />
            <input type="submit" name="submit">
        </form>
    </div>

    <div class="display_articles">
        <h3>DISPLAY STOCK</h3>
        <?php 
            display_articles();
        ?>
    </div>
</div>
</body>
</html>
