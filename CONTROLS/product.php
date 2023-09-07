<?php
    include_once '../MODEL/config.php';

    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $price = $_POST['price'];

    $mysqli = new mysqli("127.0.0.1", "calvin", "mdp", "FAS");

    if ($mysqli->connect_error) {
        die('la connexion a la base de données a échouer' . $mysqli->connect_error);
    }

    function read($mysqli) {
        $result = $mysqli->query('SELECT * FROM product');
        return $result->fetch_all(MYSQLI_ASSOC);
    }
?>