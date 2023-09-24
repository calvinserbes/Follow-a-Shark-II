<?php
include_once '../debug.php';
include_once '../MODEL/login.php';
include_once '../MODEL/product.php';

$username = $_POST['username'];
$password = $_POST['password'];

$user = login($mysqli, $username);

if($_POST['password'] === $user['password']) {
    session_start();
    $_SESSION['username']=$username;
    $_SESSION['id_user'] = $user['id'];
    echo 'connexion réussi';
    if($user['admin'] === 1) {
        echo 'connexion admin réussi';
        $_SESSION['admin'] = 1;
    }
};

Header('location: ../VIEW/home.php');
?>
