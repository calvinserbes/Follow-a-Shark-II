<?php
include_once "debug.php";
include_once "MODEL/config.php";
// relancer MODEL/bdd.sql
// lancer ce ficher
$user_password = password_hash( 'user', PASSWORD_DEFAULT);
$admin_password = password_hash( 'admin', PASSWORD_DEFAULT);

$req = "
INSERT INTO user (id, admin, username, password, email, first_name, last_name) VALUES 
(1, 1, 'admin', '".$admin_password."', 'admin@mail.com', 'calvin', 'serbes'),
(2, 0, 'calvin', '".$user_password."', 'calvin@gmail.com', 'calvin', 'serbes');
";

$stmt = $mysqli->prepare($req);
$stmt->execute();
$stmt->close();

Header('location: VIEW/login.php');
?>