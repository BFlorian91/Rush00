<?php
    session_start();
    require_once 'view/head.php';
?>
<body>
    <?php require_once 'view/menu.php'; 
    echo $_SESSION['loggued_on_user'];
    ?>
</body>
</html>