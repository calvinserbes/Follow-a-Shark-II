<?php
session_start();

// Vérifiez si l'ID du produit est présent dans l'URL
if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Vérifiez si le produit existe dans le panier
    if (isset($_SESSION['cart'][$productId])) {
        // Supprimez le produit du panier
        unset($_SESSION['cart'][$productId]);
    }
}

// Redirigez l'utilisateur vers la page du panier
header('Location: ../VIEW/cart.php'); // Remplacez "panier.php" par la page du panier appropriée
exit();
?>