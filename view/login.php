<?php 
    require_once 'menu.php'
?>
<body>
   <form action="/model/action_login.php" method="POST">
        <input type="text" name="login" placeholder="login">
        <br />
        <input type="password" name="passwd" placeholder="password">
        <br />
        <button type="submit" value="OK">login</button>
   </form> 
   <br />
   <a href="create.php">create account</a>
   <a href="modif.php">edit account</a>
</body>
</html>