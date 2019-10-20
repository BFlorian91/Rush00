<?php 
    require_once 'menu.php';
?>
<body>
	Pour finaliser votre achat vous devez vous connecter ou vous creer un compte
   	<form action="/model/action_redirect.php" method="POST">
        <input name="submit" value="Se Connecter" type="submit"/>
        <input name="submit" value="S'inscrire" type="submit"/>
   	</form> 
</body>
</html>