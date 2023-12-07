<?php
include_once '../../../config.php';
include_once '../../../controllers/pengajuanController.php';
include_once '../../../controllers/anggotaController.php';

$database = new database;
$db = $database->getKoneksi();

$pengajuanController = new pengajuanController($db);
$anggotaController = new anggotaController($db);
$pengajuan = $pengajuanController->getAllpengajuan();
?>

<?php include '../../../header_petugas.php'; ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<div class="pagetitle" style="margin-top: 10%;">
    <h1>Pengajuan Pinjaman</h1>
</div><!-- End Page Title -->
<div class="px-4 py-3" style="margin-top: 40px;">
    <table class="table table-bordered table-striped">
        <thead style="border-color: black;">
            <tr>
                <th scope="col" style="background-color: #86b049; color: white;">ID</th>
                <th scope="col" style="background-color: #86b049; color: white;">ID Anggota</th>
                <th scope="col" style="background-color: #86b049; color: white;">Tanggal Jatuh Tempo</th>
                <th scope="col" style="background-color: #86b049; color: white;">Jumlah Pinjaman</th>
                <th scope="col" style="background-color: #86b049; color: white;">Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($pengajuan as $x): ?>
                <tr>
                    <td>
                        <?= $x['id_pinjaman'] ?>
                    </td>
                    <td>
                        <?php
                        $id_anggota = $x['id_anggota'];
                        $nama_anggota = $anggotaController->getNamaById($id_anggota);
                        $nama = implode(" ", $nama_anggota);
                        echo strtok($nama, " "); ?>
                    </td>
                    <td>
                        <?= $x['tgl_jatuh_tempo'] ?>
                    </td>
                    <td>
                        <span><strong>Rp.</strong></span>
                        <?= number_format($x['jumlah_pinjaman'], 0, ',', '.') ?>
                    </td>
                    <td>
                        <a class="btn btn-warning" href="delete_pinjaman<?= $x['id_pinjaman']; ?>">Setujui</a>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include '../../../footer_petugas.php'; ?>