<?php
// vérifie que l'arrivé et bien un post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // je récupère l'id
    $id = $_POST["id"];
    // je lance la session
    session_start();
    // si il y a rien dans cart alors on créer le tableau
    if( ! isset($_SESSION["cart"])){
        $_SESSION["cart"] = array();
    }
    $qt = 1;
    // si il y a rien dans cart $id alors on ajoute 1
    if(isset($_SESSION["cart"][$id])) {
        $_SESSION["cart"][$id] += 1;
    } else {
        $_SESSION["cart"][$id] = $qt;
    }
    Header('location: ../VIEW/shop.php');
}
?>
