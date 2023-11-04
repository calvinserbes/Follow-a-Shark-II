<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="styles/all.css">
    <link rel="stylesheet" href="styles/shop.css">
</head>
<body>
    <?php 
        include_once "navigation.php";
        include_once "../MODEL/product.php";
        $newprod = read($mysqli)    
    ?>
    
    <div class="shop">

        <div class="shop_title">
            <h3 class="gift">Gift</h3>
            <h2 class="g_shop">Shop</h2>
        </div>

        <div class="shop_container">
            <?php foreach ($newprod as $product) {?>
                <div class="forview_info">
                    <form action="../CONTROLS/cart.php" method="post">
                        <div class="card" style="background: url('<?php echo $product["image"]; ?>') center; background-size: cover;">
                            <div class="info">
                                    <p class="name"><?php echo $product['name']; ?></p>
                                    <p class="price">$<?php echo $product['price']; ?></p>
                                    <p class="description"><?php echo $product['description'];?></p>
                                    <input type="submit" class="buy btn" value="Add to cart"></input>
                                    <input type="hidden" name="id" value="<?php echo $product['id']; ?>"> 
                            </div>
                        </div>
                        <div onclick="toogleInfo(this)" class="view">View</div>
                        <?php 
                            if($_SESSION['admin'] == 1) {
                                echo '<div class="controls roboto">
                                        <a style="color: #fff;" class="delete" href="../CONTROLS/delete_product.php?id=<?= $product["id"];?>Delete</a>
                                    </div>'; 
                                };
                        ?>
                    </form>
                </div>
            <?php }; ?>
        </div>

        
            <?php 
                if($_SESSION['admin'] == 1) {
                    echo '
                            <div class="added_prod">
                                <form action="../CONTROLS/added_product.php" method="post">
                                    <div class="input roboto">
                                        <label for="name">Name</label>
                                        <input type="text" name="name">
                                    </div>
                                    <div class="input roboto">
                                        <label for="description">Description</label>
                                        <input type="text" name="description">
                                    </div>
                                    <div class="input roboto">
                                        <label for="image">Image</label>
                                        <input type="text" name="image">
                                    </div>
                                    <div class="input roboto">
                                        <label for="price">Price</label>
                                        <input type="text" name="price">
                                    </div>
                                    <input class="ajouter roboto" type="submit" value="Add">
                                </form>
                            </div>
                        ';
                    };
                ?>  
        <?php include_once "social.php";?>

        <div class="test"></div>

    </div>
    
    <script src="script/mobileMenu.js"></script>
    <script src="script/colorScrollNav.js"></script>
    <script>
        // for shop card
        function toogleInfo(e) {
            const info = e.previousElementSibling.querySelector('.info');
            info.classList.toggle('view_info');
        };
    </script>
</body>
</html>