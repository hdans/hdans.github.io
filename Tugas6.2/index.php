<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="theme-selector">
        <h1>Login</h1>
        <form action="process.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <br>
            <input type="password" name="password" placeholder="Password" required>
            <br>
            <button type="submit">Login</button>
        </form>
        <a href="../index.html" class="back-button">Back</a>
        <?php
        if (isset($_SESSION['error'])) {
            echo "<p style='color: red;'>{$_SESSION['error']}</p>";
            unset($_SESSION['error']);
        }
        ?>
    </div>
</body>
</html>
