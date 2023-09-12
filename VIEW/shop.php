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
        include_once "../CONTROLS/product.php";
        $newprod = read($mysqli, $name, $description, $image)    
        ?>
    <?php include_once "navigation.php";?>
    
    <div class="shop" style="margin-top: 200px;">
        <?php include_once "../debug.php";?>
        
        <?php foreach ($newprod as $product) {?>
            <div class="forview_info">
                <div class="card" style="background: url('<?php echo $product["image"]; ?>') center; background-size: cover;">
                    <div class="info">
                            <p class="name"><?php echo $product['name']; ?></p>
                            <p class="price">$<?php echo $product['price']; ?></p>
                            <p class="description"><?php echo $product['description'];?></p>
                            <a href="" class="buy btn">Add to basket</a>
                    </div>
                </div>
                <div onclick="toogleInfo()" class="view">View</div>
            </div>
        <?php }; ?>

    </div>
    
    <script src="script/mobileMenu.js"></script>
    <script>
        let nav = document.querySelector('.navigation');
        nav.classList.add('nav_shop');

        // for shop card
        function toogleInfo() {
            const info = document.querySelector('.info');
            info.classList.toggle('view_info');
        }
    </script>
</body>
</html>