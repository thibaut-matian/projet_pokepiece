<?php
session_start();
if (!isset($_SESSION['user_id']) || empty($_SESSION['is_admin'])) {
    header('Location: connexion.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Pokepiece</title>
    <link rel="stylesheet" href="pokepiece/assets/pokepiece.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-left">
            <a href="pokepiece.php" class="nav-btn">Accueil</a>
        </div>
        <div class="nav-right">
            <a href="deconnexion.php" class="nav-btn">Déconnexion</a>
        </div>
    </nav>
    <h1>Admin Pokepiece</h1>
    <div style="max-width:600px;margin:40px auto;text-align:center;">
        <h2>Bienvenue, <?= htmlspecialchars($_SESSION['user_name']) ?> !</h2>
        <p>Ici tu pourras ajouter, modifier ou supprimer des personnages.</p>
        <!-- Ajoute ici les formulaires ou liens pour la gestion des personnages -->
    </div>
</body>
</html>
