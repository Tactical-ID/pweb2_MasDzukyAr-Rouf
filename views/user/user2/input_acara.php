<?php
include "../class/database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Form</title>
</head>
<body>

<form method="POST" action="proses_acara.php?aksi=tambah" autocomplete="off" enctype="multipart/form-data">
    <label for="nama_acara">Nama Acara:</label>
    <input type="text" id="nama_acara" name="nama_acara" class="form-control" required><br>

    <label for="lokasi">Lokasi:</label>
    <input type="text" id="lokasi" name="lokasi" class="form-control" required><br>

    <label for="tanggal_mulai">Tanggal Mulai:</label>
    <input type="date" id="tanggal_mulai" name="tanggal_mulai" class="form-control" required><br>

    <label for="tanggal_selesai">Tanggal Selesai:</label>
    <input type="date" id="tanggal_selesai" name="tanggal_selesai" class="form-control" required><br>

    <label for="keterangan">Keterangan:</label>
    <textarea name="keterangan" id="keterangan" class="form-control" required></textarea><br>

    <label for="gambar">Gambar:</label>
    <input type="file" id="gambar" name="gambar" accept=".jpg, .jpeg, .png" required><br>

    <button type="submit" value="Simpan">Submit</button>
</form>

</body>
</html>
