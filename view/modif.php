<?php
    require_once 'menu.php';
?>
<body>
    <form action="modif.php" method="POST">
        <input type="text" name="login" placeholder="login">
        <br />
        <input type="password" name="oldpw" placeholder="password">
        <br />
        <input type="password" name="newpw" placeholder="new password">
        <br />
        <button type="submit" value="OK">Editer</button>
    </form>
    <br />
    <a href="/index.php">back</a>
</body>
</html>