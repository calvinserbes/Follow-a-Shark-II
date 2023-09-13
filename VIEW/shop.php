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
        include_once "../debug.php";
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
                    <form action="">
                        <div class="card" style="background: url('<?php echo $product["image"]; ?>') center; background-size: cover;">
                            <div class="info">
                                    <p class="name"><?php echo $product['name']; ?></p>
                                    <p class="price">$<?php echo $product['price']; ?></p>
                                    <p class="description"><?php echo $product['description'];?></p>
                                    <a href="" class="buy btn">Add to basket</a>
                            </div>
                        </div>
                        <!-- instruction if$SESSION a ajouter quand on créera session admin -->
                        <div class="controls">
                            <a class="delete" href="../CONTROLS/product.php?id=<?= $product['id'];?>">Delete</a>
                            <a class="update" href="">Update</a>
                        </div>
                    </form>
                    <div onclick="toogleInfo(this)" class="view">View</div>
                </div>
            <?php }; ?>

        </div>
            
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
        }
    </script>
</body>
</html>