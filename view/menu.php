<?php
    session_start();
?>
    <header>
        <h1>Black Market</h1>
    </header>
    <nav>
        <a href="../index.php" class='active'>Accueil</a>
        <?php if (!$_SESSION['loggued_on_user']): ?>
            <a href="/view/login.php">Se Connecter</a>
            <a href="/view/create.php">S'inscrire</a>
        <?php endif; ?>
        <?php if ($_SESSION['loggued_on_user'] === 'admin'): ?>
            <a href="/view/admin.php">Admin</a> 
        <?php endif; ?>
        <?php if ($_SESSION['loggued_on_user']): ?>
            <a href="/view/modif.php">Gérer son compte</a>
            <a href="/model/action_logout.php">Déconnexion</a>
        <?php endif; ?>
    </nav>
