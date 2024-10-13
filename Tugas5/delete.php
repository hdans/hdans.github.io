<?php
include 'koneksi.php';

$npm = $_GET['npm'];
$query = "DELETE FROM identitas WHERE npm='$npm'";
mysqli_query($conn, $query);

header("Location: form.php");
?>
