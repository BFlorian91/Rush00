<?php 
    require_once 'menu.php'
?>
<body>
    <form action="/model/action_remove_user.php" method="POST">
        <label>Remove user:</label>
        <input type="text" name="login" placeholder="Login">
        <input type="submit" value="remove user">
    </form>
    <form action="/model/action_bl_user.php" method="POST">
        <label>Black list user:</label>
        <input type="text" name="login" placeholder="Login">
        <input type="submit" value="black list user">
    </form>
</body>