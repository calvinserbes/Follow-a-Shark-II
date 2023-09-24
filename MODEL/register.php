<?php 
include_once '../debug.php';
include_once '../CONTROLS/register.php';
include_once 'config.php';

function createUser($mysqli, $username, $password, $email, $firstname, $lastname){
    $req = "INSERT INTO user (username, password, email, first_name, last_name) VALUES (?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($req);
    if(!$req) {
        die('Erreur lors de la préparation de la requête : ' . $mysqli->error);
    }
    $stmt->bind_param('sssss', $username, $password, $email, $firstname, $lastname);
    if ($stmt->execute()) {
        echo 'User ajouter a la BDD';
    } else {
        echo "Erreur lors de l'ajout a la BDD : " . $stmt->error;
    }
    $stmt->close();
}


?>