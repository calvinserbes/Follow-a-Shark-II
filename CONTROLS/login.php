<?php
include_once '../debug.php';
include_once '../MODEL/login.php';

$username = $_POST['username'];
$password = $_POST['password'];


$user = login($mysqli, $username);

if ($user && password_verify($password, $user['password'])) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['id_user'] = $user['id'];
    echo 'Connexion réussie';
    if ($user['admin'] === 1) {
        echo 'Connexion admin réussie';
        $_SESSION['admin'] = 1;
    }
    Header('location: ../VIEW/home.php');
} else {
    echo 'Nom d\'utilisateur ou mot de passe incorrect.';
}
?>
