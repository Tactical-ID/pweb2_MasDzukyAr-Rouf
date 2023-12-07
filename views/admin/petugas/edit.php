<?php
include_once '../../../config.php';
include_once '../../../controllers/petugasController.php';

$database = new database;
$db = $database->getKoneksi();

$petugasController = new petugasController($db);

$d = $petugasController->getpetugasByid($_GET['id_petugas']);
?>

<?php
include '../../../header_petugas.php';
?>

<div class="px-4 py-3" style="margin-top: 85px; ">
    <h3>Edit Petugas</h3>
    <div class="card px-3 py-3" style="width: 50%;">

        <form method="post" action="proses_edit_petugas">
            <input type="hidden" name="id_petugas" value="<?php echo $d['id_petugas']; ?>">
            <div class="mb-3">
                <label for="nama_petugas" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama_petugas" value="<?php echo $d['nama_petugas']; ?>">
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" class="form-control" name="jabatan" value="<?php echo $d['jabatan']; ?>">
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">No HP</label>
                <input type="number" class="form-control" name="no_hp" value="<?php echo $d['no_hp']; ?>">
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
