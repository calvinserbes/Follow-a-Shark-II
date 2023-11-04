<?php
include_once 'config.php';
include_once '../debug.php';

// créer une commande
function createOrder($mysqli, $id_client) {
    $req = 'INSERT INTO orders (id_client) VALUES (?)';
    $stmt = $mysqli->prepare($req);
    $stmt->bind_param('i', $id_client);
    $stmt->execute();
    $stmt->close();
    // Récupérer l'ID généré pour la commande
    return $mysqli->insert_id;
}

function insertIntoLigneCo($mysqli, $id_prod, $id_order, $qt) {
    $req = 'INSERT INTO ligne_co (id_prod, id_order, qt) VALUES (?,?,?)';
    $stmt = $mysqli->prepare($req);
    $stmt->bind_param('iii', $id_prod, $id_order, $qt);
    $stmt->execute();
    $stmt->close();
}

// récupérer les commandes
function readOrder($mysqli, $id_client) {
    $req = 'SELECT * FROM orders WHERE id_client = ?';
    $stmt = $mysqli->prepare($req);
    $stmt->bind_param('i', $id_client);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_all();
}

// récupérer les produit et les infos produit dans une commande
function readProdOnCommand($mysqli, $id_order) {
    $req = 'SELECT * FROM ligne_co INNER JOIN product  ON ligne_co.id_prod = product.id WHERE id_order = ?';
    $stmt = $mysqli->prepare($req);
    $stmt->bind_param('i', $id_order);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_all(MYSQLI_ASSOC);
}


    // Sélectionner tout de la table ligne_co
    // en joingnant la table product
    // a condition que l'id de id_prod de ligne_co sois la même que l'id de la table product
    // Le tout par rapport a l'id d'une commande
?>