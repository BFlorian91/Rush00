<?php
    require_once 'menu.php';
?>
<div class="container">
<div class="forms">
    <form action="/model/action_login.php" method="POST">
        <input type="text" name="ref" placeholder="ref of article">
        <input type="submit" name="submit" value="+">
        <input type="submit" name="submit" value="-">
    </form> 
    <div class="button_container" >
        <a class="button_in_form" href="action_remove_articles.php">Remove</a>
    </div>
</div>
</div>