<?php
include_once 'config.php';

function createOrder($mysqli, $id_client) {
    $req = 'INSERT INTO order (id_client) VALUES (?)';
    $stmt = $mysqli->prepare($req);
    $stmt->bind_param('i', $id_client);
    $stmt->execute();
    $stmt->close();
    // Récupérer l'ID généré pour la commande
    return $mysqli->insert_id;

}

?>