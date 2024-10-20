<?php
session_start();

// Cek apakah user sudah login, jika belum arahkan ke login.php
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Selamat Datang, <?php echo $_SESSION['username']; ?>!</h1>
    <a href="logout.php">Logout</a>
</body>
</html>
