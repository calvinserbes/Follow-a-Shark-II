<?php
include_once '../MODEL/config.php';
include_once '../MODEL/product.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Créer une commande et récupérer son ID
    $id_order = createOrder($mysqli, $_SESSION['id_user']);

    // 2. Ajouter toutes les lignes de commande (produits du panier)
    foreach ($_SESSION['cart'] as $id => $qt) {
        $product = readById($mysqli, $id);

        // Insérer chaque ligne de commande dans la table "order_lines"
        $req = 'INSERT INTO ligne_co (id, id_prod, id_order, qt) VALUES (?, ?, ?, ?)';
        $stmt = $mysqli->prepare($req);
        $stmt->bind_param('iiii', $id, $id_prod, $id_order, $qt);
        $stmt->execute();
        $stmt->close();
    }

    // 3. Dire "merci" ou rediriger l'utilisateur
    echo 'Merci pour votre commande !';

    // Optionnel : Vous pouvez également vider le panier ici si nécessaire
    // unset($_SESSION['cart']);
};
?>