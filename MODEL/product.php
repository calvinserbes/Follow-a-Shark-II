<?php
    include_once '../MODEL/config.php';

    $mysqli = new mysqli("127.0.0.1", "calvin", "mdp", "FAS");

    if ($mysqli->connect_error) {
        die('la connexion a la base de données a échouer' . $mysqli->connect_error);
    };

    function read($mysqli) {
        $req = $mysqli->query('SELECT id, name, description, image, price FROM product');
        return $req->fetch_all(MYSQLI_ASSOC);
    };

    //faire function readById
    function readById($mysqli, $id) {
        $req = 'SELECT * FROM product WHERE id = ?';
        $stmt = $mysqli->prepare($req);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    };


    function deleteProduct($mysqli, $product_id) {
        $req = "DELETE FROM product WHERE id = ?";
        $stmt = $mysqli->prepare($req);
        $stmt->bind_param("i", $product_id);
        $stmt->execute();
        $stmt->close();
    };

    function createProduct($mysqli, $name, $description, $image, $price) {
        $req = "INSERT INTO product (name, description, image, price) VALUES (?, ?, ?, ?)";
        $stmt = $mysqli->prepare($req);
        if (!$stmt) {
            die('Erreur de préparation de la requête : ' . $mysqli->error);
        }
        $stmt->bind_param('ssss', $name, $description, $image, $price);
        if ($stmt->execute()) {
            echo "Article a bien étais ajouter";
        } else {
            echo "Erreur lors de l'ajout de l'article : " . $stmt->error;
        }
        $stmt->close();
    };
?>