<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Anggota</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include('koneksi.php');
    $id = $_GET['id'];
    $query = "SELECT * FROM anggota2 WHERE id = $id";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_array($result);
    mysqli_close($koneksi);
    ?>
    <div class="container">
        <h2>Edit Data Anggota</h2>
        <form action="proses.php?aksi=ubah" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" required>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" value="<?php echo $row['nama']; ?>" required>
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <div class="radio-group">
                <input type="radio" name="jenis_kelamin" value="L" id="laki" <?php if ($row['jenis_kelamin'] === 'L') echo 'checked'; ?> required>
                <label for="laki">Laki-laki</label>
                <input type="radio" name="jenis_kelamin" value="P" id="perempuan" <?php if ($row['jenis_kelamin'] === 'P') echo 'checked'; ?> required>
                <label for="perempuan">Perempuan</label>
            </div>
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" id="alamat" value="<?php echo $row['alamat']; ?>" required>
            <label for="no_telp">No. Telp:</label>
            <input type="text" name="no_telp" id="no_telp" value="<?php echo $row['no_telp']; ?>" required>
            <button type="submit">Simpan Perubahan</button> <a href="indeks.php" class="btn-kembali">Kembali</a>
        </form>
    </div>
</body>

</html>