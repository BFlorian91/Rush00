<?php
    require_once 'menu.php';
?>
<body>
    <form action="/model/action_modif.php" method="POST">
        <input type="password" name="oldpw" placeholder="password">
        <br />
        <input type="password" name="newpw" placeholder="new password">
        <br />
        <button type="submit" name="submit" value="OK">Editer</button>
    </form>
</body>
</html>