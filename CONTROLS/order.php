<?php
include_once '../MODEL/config.php';
include_once '../MODEL/order.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Creer une commande et récupère son id
    $id_order = createOrder($mysqli, $_SESSION['id_user']);

    // ajouter a la ligne de commande (table)
    foreach ($_SESSION['cart'] as $id_prod => $qt) {

        // inserer dans ligne_co
        insertIntoLigneCo($mysqli, $id_prod, $id_order, $qt);
    }

    header('Location: ../VIEW/profil.php');
    // vider le panier
    unset($_SESSION['cart']);
};
?>