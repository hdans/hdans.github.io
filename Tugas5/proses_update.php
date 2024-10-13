<?php
include 'koneksi.php';

$npm = $_POST['npm'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tgl_lhr = $_POST['tanggal_lahir'];
$jk = $_POST['jenis_kelamin'];
$email = $_POST['email'];

$query = "UPDATE identitas SET nama='$nama', alamat='$alamat', tgl_lhr='$tgl_lhr', jk='$jk', email='$email' WHERE npm='$npm'";
mysqli_query($conn, $query);

header("Location: form.php");
?>
