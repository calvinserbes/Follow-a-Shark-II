<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="styles/all.css">
    <link rel="stylesheet" href="styles/profil.css">
</head>
<body>
    <?php include_once "navigation.php";?>

    <div class="profil">
        <h3><?php echo $_SESSION['username'];?></h3>
        <a href="../CONTROLS/logout.php" class="logout">Logout</a>
    </div>
    
</body>
</html>