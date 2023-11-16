<?php
include_once 'config.php';

function readArticle($mysqli) {
    $req = $mysqli->query('SELECT * from article');
    return $req->fetch_all(MYSQLI_ASSOC);
};

?>