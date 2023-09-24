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
            <div class="input_form">
                <label for="username"></label>
                <input type="text" name="username" id="username">
            </div>
            <div class="input_form">
                <label for="password"></label>
                <input type="text" name="password" id="password">
            </div>
            <input type="submit" value="submit">
        </form>
    </div>

    
</body>
</html>