<?php
// Variable $error attendue du contrôleur
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../pokepiece/assets/pokepiece.css">
    <style>
        .login-container { max-width: 400px; margin: 80px auto; background: #fff8; border-radius: 18px; box-shadow: 0 4px 24px #0002; padding: 32px; }
        .login-container h2 { text-align: center; margin-bottom: 24px; }
        .login-container label { display: block; margin-top: 12px; }
        .login-container input { width: 100%; padding: 8px; border-radius: 8px; border: 1px solid #ccc; margin-top: 4px; }
        .login-container button { margin-top: 24px; width: 100%; }
        .error-msg { color: #c00; text-align: center; margin-top: 12px; }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Connexion</h2>
        <?php if (!empty($error)): ?><div class="error-msg"><?= htmlspecialchars($error) ?></div><?php endif; ?>
        <form method="post">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" required>
            <button class="nav-btn" type="submit">Se connecter</button>
        </form>
    </div>
</body>
</html>
