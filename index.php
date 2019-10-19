<?php
    session_start();
?>
<head>
    <meta charset="UTF-8">
    <title>Black Market</title>
</head>
<body>
    <?php require_once 'view/menu.php'; 
    echo $_SESSION['loggued_on_user'];
    ?>
</body>
</html>