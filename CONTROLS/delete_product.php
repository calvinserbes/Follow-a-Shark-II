<?php
    include_once "../debug.php";
    include_once "../MODEL/config.php";
    include_once "../MODEL/product.php";
    deleteProduct($mysqli, $_GET["id"]);
    header("Location: ../VIEW/cart.php");
?>