<?php
include_once "../MODEL/product.php";

$name = $_POST['name'];
$description = $_POST['description'];
$image = $_POST['image'];
$price = $_POST['price'];

createProduct($mysqli, $name, $description, $image, $price);
header("Location: ../VIEW/shop.php")
?>