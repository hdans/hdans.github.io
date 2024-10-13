<?php
include 'koneksi.php';
$npm = $_GET['npm'];
$query = "SELECT * FROM identitas WHERE npm='$npm'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Mahasiswa</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<header>
    Update Data Mahasiswa Teknik Informatika
</header>

<div class="container">
    <section class="form-section">
        <h2>Update Data Mahasiswa</h2>
        <form action="proses_update.php" method="POST">
            <input type="hidden" name="npm" value="<?php echo $row['npm']; ?>">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea id="alamat" name="alamat" rows="4" required><?php echo $row['alamat']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $row['tgl_lhr']; ?>" required>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin:</label>
                <div class="radio-group">
                    <label><input type="radio" name="jenis_kelamin" value="L" <?php if ($row['jk'] == 'L') echo 'checked'; ?>> Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="P" <?php if ($row['jk'] == 'P') echo 'checked'; ?>> Perempuan</label>
                </div>
            </div>            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required>
            </div>
            <button type="submit" class="btn btn-kirim">Update</button>
        </form>
    </section>
</div>

</body>
</html>
