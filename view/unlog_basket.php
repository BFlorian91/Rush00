<?php
    require_once 'menu.php';
?>
<body>
	Ce compte avait deja un panier contenant des articles, voulez-vous y ajouter le panier actuel ?
   	<form action="/model/action_merge_basket.php" method="POST">
        <input name="submit" value="OUI" type="submit"/>
        <input name="submit" value="NON" type="submit"/>
   	</form> 
</body>
</html>