<?php
include_once '../../../config.php';
include_once '../../../controllers/anggotaController.php';

$database = new database;
$db = $database->getKoneksi();

$anggotaController = new anggotaController($db);

$d = $anggotaController->getAnggotaByid_anggota($_GET['id_anggota']);
?>

<?php
include '../../../header_petugas.php';
?>

<div class="px-4 py-3" style="margin-top: 85px; ">
    <h3>Edit Anggota</h3>
    <div class="card px-3 py-3" style="width: 50%;">

        <form method="post" action="proses_edit_anggota">
            <input type="hidden" name="id_anggota" value="<?php echo $d['id_anggota']; ?>">
            <div class="mb-3">
                <label for="nama_anggota" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama_anggota" value="<?php echo $d['nama_anggota']; ?>">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" cols="20"
                    rows="5"><?php echo $d['alamat']; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">No HP</label>
                <input type="number" class="form-control" name="no_hp" value="<?php echo $d['no_hp']; ?>">
            </div>
            <div class="mb-3">
                <label for="tgl_gabung" class="form-label">Tanggal Bergabung</label>
                <input type="date" class="form-control" name="tgl_gabung" value="<?php echo $d['tgl_gabung']; ?>">
            </div>
            <div class="mb-3">
                <label for="no_ktp" class="form-label">No KTP</label>
                <input type="number" class="form-control" name="no_ktp" value="<?php echo $d['no_ktp']; ?>">
            </div>
            <div class="text-right">
                <input type="submit" class="btn btn-success" value="Simpan">
            </div>
        </form>
    </div>
</div>

<?php
include '../../../footer_petugas.php';
?>
