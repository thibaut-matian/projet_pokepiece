CREATE DATABASE poke_piece;

USE poke_piece;

CREATE TABLE personnages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    prenom VARCHAR(50),
    FDD VARCHAR(100),
    Description TEXT,
    Localisation VARCHAR(100),
    image VARCHAR(100)
);

INSERT INTO personnages (prenom, FDD, Description, Localisation, image) VALUES
('Luffy', 'Hito Hito no Mi, modèle : Nika', 'Capitaine des Chapeaux de paille, Luffy est un jeune pirate au chapeau de paille, au cœur pur et au corps élastique grâce au fruit du Gomu Gomu. Il rêve de devenir le Roi des Pirates.', 'East Blue', 'assets/img/luffy.png'),
('Nami', '8', 'Navigatrice du groupe, Nami est une experte en cartographie et en météorologie. Maline et ambitieuse, elle manie un bâton climatique et adore l’or.', 'East Blue', 'assets/img/nami.jpg'),
('Zoro', '16', 'Épéiste loyal de l’équipage, Zoro manie trois sabres et vise à devenir le meilleur escrimeur du monde. Calme et déterminé, il ne recule jamais devant un combat.', 'East Blue', 'assets/img/zoro.jpg'),
('Marshall.D.Teach', 'Yami Yami no Mi - Gura Gura no Mi', 'Pirate redoutable et manipulateur, Barbe Noire possède deux pouvoirs de fruits du démon. Il poursuit son propre rêve de domination et défie l’équilibre du monde.', 'L''île de la Ruche, Shin Sekai', 'assets/img/barbenoire.png'),
('Kuma', 'Nikyu Nikyu no Mi', 'Ancien révolutionnaire devenu Shichibukai, Kuma est un homme immense et mystérieux, modifié en cyborg par Vegapunk.', 'South Blue', 'assets/img/kuma.png'),
('Kizaru', 'Pika Pika no Mi', 'Amiral de la Marine à l’allure décontract.', 'North Blue', 'assets/img/kizaru.png');

CREATE TABLE IF NOT EXISTS users (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(255) NOT NULL,
  created_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  is_admin TINYINT(1) DEFAULT '0',
  PRIMARY KEY (id),
  UNIQUE KEY email (email),
  KEY idx_users_email (email)
);
