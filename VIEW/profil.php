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
    <?php 
        include_once '../MODEL/order.php';
        include_once '../MODEL/product.php';
        $id_client = $_SESSION['id_user'];
        $commandes = readOrder($mysqli, $id_client); 
    ?>
</head>
<body>
    <?php include_once "navigation.php";?>

    <div class="welcome_profil">
        <h3>Bienvenu dans votre session, <b class='welcome_user'><?php echo $_SESSION['username'];?></b>.</h3>
    </div>

    <div class="suivi_commande">
        <h5>Suivi de vos commande : </h5>
    </div>

    <div class="order">
        <?php foreach($commandes as $commande) { ;?>
            <div class="orders">
                <p class="commande_num">Votre commande numéro <span>#<?php echo $commande[0];?></span></p>
                <div class="commande_contain">
                            <?php 
                            $id_order = $commande[0];
                            $products = readProdOnCommand($mysqli, $id_order);
                            foreach($products as $product) {;?>
                                <div class="product_in_order">
                                    <div class='img_commande' style="background: url('<?php echo $product["image"]; ?>') center; background-size: cover;"></div>
                                    <p><?php echo $product['name'];?> x <?php echo $product['qt'];?></p>
                                </div>
                            <?php };?> 
                </div>
                <div class="order_state">
                    <p>État de votre commande : </p>
                    <!-- boucle foreach -->
                    <span>Commande en préparation ✓</span>
                    <!-- end -->
                </div>
            </div>
        <?php }; ?>
        <!--  -->

        <a href="../CONTROLS/logout.php" class="logout">Logout</a>
    </div>
    
    <script>
        let nav = document.querySelector('.navigation');
        nav.classList.add('nav_profil');
    </script>
</body>
</html>