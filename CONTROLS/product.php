<?php
    include_once "../debug.php";
    include_once "../MODEL/config.php";
    include_once "../MODEL/product.php";
    $mysqli = new mysqli("127.0.0.1", "calvin", "mdp", "FAS");
    deleteProduct($mysqli, $_GET["id"]);
?>