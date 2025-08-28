<?php
// Variables $error et $success attendues du contrôleur
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../pokepiece/assets/pokepiece.css">
    <style>
        .register-container { max-width: 400px; margin: 80px auto; background: #fff8; border-radius: 18px; box-shadow: 0 4px 24px #0002; padding: 32px; }
        .register-container h2 { text-align: center; margin-bottom: 24px; }
        .register-container label { display: block; margin-top: 12px; }
        .register-container input { width: 100%; padding: 8px; border-radius: 8px; border: 1px solid #ccc; margin-top: 4px; }
        .register-container button { margin-top: 24px; width: 100%; }
        .error-msg { color: #c00; text-align: center; margin-top: 12px; }
        .success-msg { color: #080; text-align: center; margin-top: 12px; }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Inscription</h2>
        <?php if (!empty($error)): ?><div class="error-msg"><?= htmlspecialchars($error) ?></div><?php endif; ?>
        <?php if (!empty($success)): ?><div class="success-msg"><?= htmlspecialchars($success) ?></div><?php endif; ?>
        <form method="post">
            <label for="name">Nom</label>
            <input type="text" name="name" id="name" required>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" required>
            <label for="password_confirm">Confirmer le mot de passe</label>
            <input type="password" name="password_confirm" id="password_confirm" required>
            <button class="nav-btn" type="submit">S'inscrire</button>
        </form>
    </div>
</body>
</html>
