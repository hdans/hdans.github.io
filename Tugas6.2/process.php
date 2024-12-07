<?php
session_start();

$valid_user = "user";
$valid_pass = "password";

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username === $valid_user && $password === $valid_pass) {
    $_SESSION['username'] = $username;
    header("Location: welcome.php");
} else {
    $_SESSION['error'] = "Username atau Password salah!";
    header("Location: index.php");
}
exit;
?>
