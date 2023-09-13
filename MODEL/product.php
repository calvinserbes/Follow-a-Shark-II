<?php
    include_once '../MODEL/config.php';

    // vérifié si c'est un post
    // $name = $_POST['name'];
    // $description = $_POST['description'];
    // $image = $_POST['image'];
    // $price = $_POST['price'];

    $mysqli = new mysqli("127.0.0.1", "calvin", "mdp", "FAS");

    if ($mysqli->connect_error) {
        die('la connexion a la base de données a échouer' . $mysqli->connect_error);
    }

    function read($mysqli) {
        $result = $mysqli->query('SELECT * FROM product');
        return $result->fetch_all(MYSQLI_ASSOC);
    }


    function deleteProduct($mysqli, $product_id) {
        $query = "DELETE FROM product WHERE id = ?";
        $stmt = $mysqli->prepare($query);
        if ($stmt === false) {
            die("Erreur de préparation de la requête : " . $mysqli->error);
        }
        $stmt->bind_param("i", $product_id);
        if ($stmt->execute() === true) {
            return true;
        } else {
            die("Erreur d'exécution de la requête : " . $stmt->error);
        }
        $stmt->close();
    }
?>