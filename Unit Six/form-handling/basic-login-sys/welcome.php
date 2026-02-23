<?php
if (!isset($_GET['user']) || empty($_GET['user'])) {
    header("Location: login-form.php?error=Please log in first.");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<body>
    <h2>Welcome, <?php echo htmlspecialchars($_GET['user']); ?>!</h2>
    <a href="login-form.php">Go Back</a>
</body>

</html>
