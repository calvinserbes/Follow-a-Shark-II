<?php
// Initialisé la session
session_start();
 
// Annule toutes les variables de la session
$_SESSION = array();
 
// Detruire la session
session_destroy();
 
// Redirige vers la page de connection
header("location: ../VIEW/login.php");
exit;
?>