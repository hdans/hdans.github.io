<?php
$host = "localhost"; 
$user = "danish";      
$pass = "danishganteng";          
$dbname = "mhs"; 

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
