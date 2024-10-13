<?php
include 'koneksi.php'; 
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

</head>
<body>

<header>
    Form Mahasiswa Teknik Informatika
</header>

<div class="container">
    <section class="form-section">
        <h2>Input Data Mahasiswa</h2>
        <form action="proses_tambah.php" method="POST">
            <div class="form-group">
                <label for="npm">NPM:</label>
                <input type="text" id="npm" name="npm" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea id="alamat" name="alamat" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir:</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" required>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin:</label>
                <div class="radio-group">
                    <label><input type="radio" name="jenis_kelamin" value="L" required> Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="P" required> Perempuan</label>
                </div>
            </div>            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <button type="submit" class="btn btn-kirim">Kirim</button>
        </form>
    </section>

    <section class="table-section" style="padding: 20px; text-align: center;">
    <h2 style="font-family: Arial, sans-serif; color: #4a4a4a;">Daftar Mahasiswa</h2>
    <div class="table-container" style="width: 90%; margin: 0 auto; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); background-color: #f8f7f9; border-radius: 10px; overflow: hidden;">
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="background-color: #a66fd7; color: white;">
                    <th style="padding: 15px; text-align: left;">NPM</th>
                    <th style="padding: 15px; text-align: left;">Nama</th>
                    <th style="padding: 15px; text-align: left;">Alamat</th>
                    <th style="padding: 15px; text-align: left;">Tanggal Lahir</th>
                    <th style="padding: 15px; text-align: left;">Jenis Kelamin</th>
                    <th style="padding: 15px; text-align: left;">Email</th>
                    <th style="padding: 15px; text-align: left;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $query = "SELECT * FROM identitas";
                $result = mysqli_query($conn, $query);
                
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr style='border-bottom: 1px solid #ccc;'>
                            <td style='padding: 15px; text-align: left;'>{$row['npm']}</td>
                            <td style='padding: 15px; text-align: left;'>{$row['nama']}</td>
                            <td style='padding: 15px; text-align: left;'>{$row['alamat']}</td>
                            <td style='padding: 15px; text-align: left;'>{$row['tgl_lhr']}</td>
                            <td style='padding: 15px; text-align: left;'>{$row['jk']}</td>
                            <td style='padding: 15px; text-align: left;'>{$row['email']}</td>
                            <td style='padding: 15px; text-align: left;'>
                                <a href='update_form.php?npm={$row['npm']}' style='text-decoration: none; color: #007bff; margin-right: 10px;'>Update</a>
                                <a href='delete.php?npm={$row['npm']}' style='text-decoration: none; color: #e74c3c;' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Delete</a>
                            </td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='7' style='text-align: center; padding: 20px; color: #e74c3c;'>Tidak ada data</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</section>

</div>

</body>
</html>