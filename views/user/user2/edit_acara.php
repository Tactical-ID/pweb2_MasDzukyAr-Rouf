<?php
include "../class/database.php";
include "../../header.php";
$db = new Database();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    </head>
<body>

<a class="btn btn-primary mb-3 mt-3" href="tampil_acara.php">Kembali</a>

<h2>Edit Acara</h2>

<form method="post" action="proses_acara.php?aksi=edit" enctype="multipart/form-data">
    <?php
    foreach ($db->update_acara($_GET['id']) as $d) {
    ?>
    <?php if (!empty($d['gambar'])): ?>
    <img src="../../content/<?php echo $d['gambar']; ?>" alt="Current Image" style="max-width: 300px; max-height: 300px;">
    <?php else: ?>
    <p>No image available</p>
    <?php endif; ?>

    <input type="hidden" name="id_acara" value="<?php echo $d['id_acara']; ?>">

    <label for="nama_acara">Nama Acara:</label>
    <input type="text" name="nama_acara" value="<?php echo $d['nama_acara']; ?>" required>

    <label for="lokasi">Lokasi:</label>
    <input type="text" name="lokasi" value="<?php echo $d['lokasi']; ?>" required>

    <label for="tanggal_mulai">Tanggal Mulai:</label>
    <input type="date" name="tanggal_mulai" value="<?php echo $d['tanggal_mulai']; ?>" required>

    <label for="tanggal_selesai">Tanggal Selesai:</label>
    <input type="date" name="tanggal_selesai" value="<?php echo $d['tanggal_selesai']; ?>" required>

    <label for="keterangan">Keterangan:</label>
    <textarea name="keterangan" required><?php echo $d['keterangan']; ?></textarea>

    <label for="gambar">Upload Gambar Baru (Optional):</label>
    <input type="file" name="gambar">

    <input type="hidden" name="gambar_lama" value="<?php echo $d['gambar']; ?>">

    <button type="submit">Simpan Perubahan</button>
    <?php
    }
    ?>
</form>

<script>
    function confirmDelete() {
        return confirm("Are you sure you want to delete this event?");
    }
</script>

</body>
</html>
