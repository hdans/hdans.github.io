<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $npm = htmlspecialchars($_POST['npm']);
    $nama = strtoupper(htmlspecialchars($_POST['nama']));
    $alamat = strtoupper(htmlspecialchars($_POST['alamat']));
    $tempat_lahir = htmlspecialchars($_POST['tempat_lahir']);
    $tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir']);
    $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
    $hobi = htmlspecialchars($_POST['hobi']);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Input Data Mahasiswa</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<header>
    Hasil Input Data Mahasiswa
</header>

<div class="container">
    <section class="result-section">
        <h2>Data Mahasiswa</h2>
        <div class="result-group">
            <label>NPM:</label>
            <p><?php echo $npm; ?></p>
        </div>
        <div class="result-group">
            <label>Nama:</label>
            <p><?php echo $nama; ?></p>
        </div>
        <div class="result-group">
            <label>Alamat:</label>
            <p><?php echo $alamat; ?></p>
        </div>
        <div class="result-group">
            <label>Tempat Lahir:</label>
            <p><?php echo $tempat_lahir; ?></p>
        </div>
        <div class="result-group">
            <label>Tanggal Lahir:</label>
            <p><?php echo $tanggal_lahir; ?></p>
        </div>
        <div class="result-group">
            <label>Jenis Kelamin:</label>
            <p><?php echo $jenis_kelamin; ?></p>
        </div>
        <div class="result-group">
            <label>Hobi:</label>
            <p><?php echo $hobi; ?></p>
        </div>
        <a href="../index.html" class="btn btn-kembali">Kembali</a>
    </section>
</div>

</body>
</html>
