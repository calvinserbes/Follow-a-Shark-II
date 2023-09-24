<?php
include_once "../debug.php";
include_once "config.php";
include_once "../CONTROLS/login.php";

function login($mysqli, $username) {
    $req = 'SELECT * FROM user WHERE username = ?';
    $stmt = $mysqli->prepare($req);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    return $user;
}
?>