<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles/all.css">
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
    <?php include_once "navigation.php";?>
    <div class="login">
        <form action="../CONTROLS/login.php" method="post">
            <div></div>
            <div class="input">
                <input type="text" name="username" id="username" placeholder="Username">
                <input type="password" name="password" id="password" placeholder="Password">
            </div>
            <input class="submit_login" type="submit" value="submit">
        </form>
    </div>

    
</body>
</html>