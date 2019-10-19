<?php
    require_once 'menu.php';
?>
<body>
    <form action="/model/action_create.php" method="POST">
        <input type="text" name="login" placeholder="login">
        <br />
        <input type="password" name="passwd" placeholder="password">
        <br />
        <button type="submit" value="OK">Créer</button>
    </form>
</body>
</html>
