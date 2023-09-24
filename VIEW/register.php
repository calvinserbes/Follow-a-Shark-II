<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles/all.css">
    <link rel="stylesheet" href="styles/register.css">
</head>
<body>
    <?php include '../debug.php';?>
    <?php include_once "navigation.php";?>

    <div class="register">

        <form action="../CONTROLS/register.php" method="post">

            <div class="input_form">
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </div>
            <div class="input_form">
                <label for="password">Password</label>
                <input type="text" name="password" id="password">
            </div>
            <div class="input_form">
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </div>
            <div class="input_form">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name">
            </div>
            <div class="input_form">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name">
            </div>

            <input type="submit" value="Submit">
            <a href="login.php">Login</a>

        </form>
        
    </div>

    <script>
        let nav = document.querySelector('.navigation');
        nav.classList.add('nav_register');
    </script>
    
</body>
</html>