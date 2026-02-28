<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form method="POST" action="login-process.php">
        Username: <input type="text" name="uName"><br><br>
        Password: <input type="password" name="uPass"><br><br>

        <input type="submit" value="Log In">
    </form>
    <br><br>
    <?php
    if (isset($_GET['error'])) {
        echo '<span style="color:red">' . $_GET['error'] . '</span>';
    }
    ?>
</body>

</html>