<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: index.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['name']); ?>!</h1>
    <p>Your email: <?php echo htmlspecialchars($_SESSION['email']); ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>
