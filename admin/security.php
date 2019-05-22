<?php
session_start();

require_once __DIR__ . '/../model/database.php';

$user = null;

if (isset($_SESSION['id'])) {
    // L'utilisateur est déjà connecté
    $user = getOneRow('utilisateur', $_SESSION['id']);
} else if (isset($_POST['email']) && isset($_POST['password'])) {
    // L'utilisateur essaie de se connecter
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = getUtilisateurByEmailMotDePasse($email, $password);
    if($user) {
        // Si l'utilisateur existe, on l'enregistre dans la session
        $_SESSION['id'] = $user['id'];
    }
}

if(!$user) {
    header('Location: login.php');
} else if (!$user['admin']) {
    header('Location: ../');
}