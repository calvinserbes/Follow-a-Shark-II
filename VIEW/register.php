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
            <div class="input">
                <input type="text" name="username" id="username" placeholder="Username">
                <input type="password" name="password" id="password" placeholder="Password">
                <input type="text" name="email" id="email" placeholder="Email">
                <input type="text" name="first_name" id="first_name" placeholder="First name">
                <input type="text" name="last_name" id="last_name" placeholder="Last name">
            </div>

            <input class="submit_register" type="submit" value="Submit">
            <span>or</span>
            <a class="login_link" href="login.php">Login</a>
        </form>
        
    </div>
    
</body>
</html>