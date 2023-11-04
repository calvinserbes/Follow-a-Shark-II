<?php
define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'calvin');
define('DB_PASSWORD', 'mdp');
define('DB_NAME', 'FAS');
$mysqli = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if($mysqli === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>