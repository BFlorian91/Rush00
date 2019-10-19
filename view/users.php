<?php 
    require_once 'menu.php'
?>
<body>
    <form action="/model/action_remove_user.php" method="POST">
        <label>Remove user:</label>
        <input type="text" name="login" placeholder="Login">
        <input type="submit" name="submit">
    </form>
    <form action="/model/action_bl_user.php" method="POST">
        <label>Black list user:</label>
        <input type="text" name="login" placeholder="Login">
        <input type="submit" name="submit">
    </form>
</body>