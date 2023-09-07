<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="styles/all.css">
    <link rel="stylesheet" href="styles/cart.css">
</head>
<body>
    <?php include_once "navigation.php";?>
    <div class="cart" style='margin-top: 200px;'>
    </div>
    <script>
        let nav = document.querySelector('.navigation');
        nav.classList.add('nav_shop');
    </script>
</body>
</html>