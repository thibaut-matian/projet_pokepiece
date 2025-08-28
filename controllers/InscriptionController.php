<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../models/User.php';

$error = '';
$success = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $password_confirm = $_POST['password_confirm'] ?? '';
    $userModel = new User($pdo);
    if ($name === '' || $email === '' || $password === '') {
        $error = 'Tous les champs sont obligatoires.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Email invalide.';
    } elseif ($password !== $password_confirm) {
        $error = 'Les mots de passe ne correspondent pas.';
    } elseif ($userModel->findByEmail($email)) {
        $error = 'Cet email est déjà utilisé.';
    } else {
        if ($userModel->create($name, $email, $password)) {
            header('Location: /projet_pokepiece/connexion.php?inscription=success');
            exit;
        } else {
            $error = 'Erreur lors de l\'inscription.';
        }
    }
}
