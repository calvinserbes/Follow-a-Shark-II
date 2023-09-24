<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="styles/all.css">
    <link rel="stylesheet" href="styles/cart.css">
    <?php include_once "../MODEL/product.php";?>
</head>
<body>
    <?php include_once "navigation.php";?>

    <div class="cart">

        <form action="../CONTROLS/order.php" method="post">
            <div class="scrollable">
                <table>
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Quantité</th>
                            <th>Prix</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                        <tbody>
                            <?php 
                                $cartTotal = 0; 
                                foreach($_SESSION['cart'] as $id => $qt) { 
                                $product = readById($mysqli, $id);
                                $totalProduct = $qt * $product['price'];
                                $cartTotal += $totalProduct;
                            ?>
                                <tr>
                                    <td>
                                        <div>
                                            <img src="<?php echo $product['image'];?>">
                                        </div>
                                    </td>
                                    <td class="name"><?php echo $product['name'];?></td>
                                    <td class="qt"><?php echo $qt;?></td>
                                    <td class="price">$<?php echo $product['price'];?></td>
                                    <td class="total_product">$<?php echo $totalProduct;?></td>
                                    <td class="delete">
                                        <a href="../CONTROLS/delete_product_cart.php?id=<?php echo $product['id']; ?>">
                                            <img class="boue" src="assets/images/boue.png" alt="boué" title="Delete ">
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4">Total du panier :</td>
                            <td class="total_cart">$<?php echo $cartTotal; ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

                <div class="cmd">
                    <input type='submit' class="btn" value="Commander"/>
                </div>
                
        </form>

    </div>
    
    <script src="script/mobileMenu.js"></script>
    <script>
        let nav = document.querySelector('.navigation');
        nav.classList.add('nav_cart');
    </script>
</body>
</html>