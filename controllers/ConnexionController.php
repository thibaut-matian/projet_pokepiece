<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../models/User.php';
session_start();
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $userModel = new User($pdo);
    $user = $userModel->findByEmail($email);
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['is_admin'] = $user['is_admin'];
        if ($user['is_admin']) {
            header('Location: /projet_pokepiece/admin.php');
        } else {
            header('Location: /projet_pokepiece/pokepiece.php');
        }
        exit;
    } else {
        $error = 'Identifiants invalides.';
    }
}
