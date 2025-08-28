<?php
class User {
    private $pdo;
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    public function findByEmail($email) {
        $stmt = $this->pdo->prepare('SELECT * FROM users WHERE email = ?');
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function create($name, $email, $password) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        // Vérifier s'il existe déjà un admin
        $adminCheck = $this->pdo->query("SELECT COUNT(*) FROM users WHERE is_admin = 1")->fetchColumn();
        $is_admin = ($adminCheck == 0) ? 1 : 0;
        $stmt = $this->pdo->prepare('INSERT INTO users (name, email, password, is_admin) VALUES (?, ?, ?, ?)');
        return $stmt->execute([$name, $email, $hash, $is_admin]);
    }
}
