<?php
// Connexion à la base de données
$host = 'localhost';
$dbname = 'poke_piece';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// Récupération des personnages
$sql = "SELECT * FROM personnages";
$stmt = $pdo->query($sql);
$classe = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="pokepiece/assets/pokepiece.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-left">
            <a href="pokepiece.php" class="nav-btn">Accueil</a>
        </div>
        <div class="nav-right">
            <a href="#" class="nav-btn">Connexion</a>
            <a href="#" class="nav-btn">Inscription</a>
            <a href="#" class="nav-btn">Bouton 1</a>
            <a href="#" class="nav-btn">Bouton 2</a>
        </div>
    </nav>
    <h1><span>P</span>okeP<span>iece</span></h1>
    <div class="container">
    <?php foreach($classe as $element ): ?> 
        <div class="card">
        <p><?= htmlspecialchars($element['prenom']); ?></p>
        <p><?= htmlspecialchars($element['FDD']); ?></p>
        <p><?= htmlspecialchars($element['Description']); ?></p>
        <p><?= htmlspecialchars($element['Localisation']); ?></p>
        <img src="pokepiece/<?= htmlspecialchars($element['image']); ?>" alt="<?= htmlspecialchars($element['prenom']) ?>" class="avatar"> 
        </div>
    <?php endforeach; ?>
    </div>
</body>
</html>