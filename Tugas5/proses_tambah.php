<?php
include 'koneksi.php';

$npm = $_POST['npm'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tgl_lhr = $_POST['tanggal_lahir'];
$jk = $_POST['jenis_kelamin'];
$email = $_POST['email'];

$query = "INSERT INTO identitas (npm, nama, alamat, tgl_lhr, jk, email) VALUES ('$npm', '$nama', '$alamat', '$tgl_lhr', '$jk', '$email')";
mysqli_query($conn, $query);

header("Location: form.php");
?>
