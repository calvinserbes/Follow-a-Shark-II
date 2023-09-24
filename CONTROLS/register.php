<?php
include_once '../debug.php';
include_once '../MODEL/register.php';

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];

createUser($mysqli, $username, $password, $email, $first_name, $last_name);
?>