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
    <?php include_once "../debug.php";?>
    <?php 
        include_once "../CONTROLS/product.php";
        $newprod = read($mysqli, $name, $description, $image, $price)    
    ?>
    <?php include_once "navigation.php";?>

    <div class="shop">

    <?php for ($i = 0; $i < count($newprod); $i++){ ?>
        <div class="card">
            <div class="image">
                <?php echo $newprod[$i]["image"];?>
                <img src="" alt="">
            </div>
            <div class="info">
                <p class="nom">
                    <?php echo $newprod[$i]['name'];?>
                </p>
                <p class="price">
                <?php echo $newprod[$i]['price'];?>
                </p>
            </div>
            <a href="" class="buy"></a>
        </div>
    <?php };?>   

    </div>
    
    <script>
        let nav = document.querySelector('.navigation');
        nav.classList.add('nav_shop');
    </script>
</body>
</html>