<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    // Hardcoded username dan password untuk contoh
    $valid_username = "admin";
    $valid_password = "admin123";

    // Cek apakah username dan password valid
    if ($_POST['username'] == $valid_username && $_POST['password'] == $valid_password) {
        $_SESSION['username'] = $valid_username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error_message = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
    <?php
    if (isset($error_message)) {
        echo "<p style='color:red;'>" . $error_message . "</p>";
    }
    ?>
</body>
</html>
