<?php
include_once '../../../config.php';
include_once '../../../controllers/transaksiController.php';
include_once '../../../controllers/anggotaController.php';

$database = new database;
$db = $database->getKoneksi();

$transaksiController = new transaksiController($db);
$anggotaController = new anggotaController($db);
$transaksi = $transaksiController->getAlltransaksi();

?>

<?php include '../../../header_petugas.php'; ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script>
    function openFullScreenImage(imagePath) {
        // Open the image in a modal
        document.getElementById('modalImage').src = imagePath;
        $('#imageModal').modal('show');
    }

    function closeImageModal() {
        $('#imageModal').modal('hide');
    }
</script>

<div class="pagetitle" style="margin-top: 10%; margin-bottom: 3%;">
    <h1>Daftar Transaksi</h1>
</div><!-- End Page Title -->

<table class="table table-bordered table-striped">
    <thead style="border-color: black;">
        <tr>
            <th scope="col" style="background-color: #86b049; color: white;">ID</th>
            <th scope="col" style="background-color: #86b049; color: white;">Nama Anggota</th>
            <th scope="col" style="background-color: #86b049; color: white;">Nominal</th>
            <th scope="col" style="background-color: #86b049; color: white;">Pembayaran</th>
            <th scope="col" style="background-color: #86b049; color: white;">Kwitansi</th>
            <th scope="col" style="background-color: #86b049; color: white;">Aksi</th>
        </tr>
    </thead>

    <tbody>

        <?php foreach ($transaksi as $x): ?>
            <tr>
                <td>
                    <?= $x['id_transaksi'] ?>
                </td>
                <td>

                    <?php
                    $id_anggota = $x['id_anggota'];
                    $nama_anggota = $anggotaController->getNamaById($id_anggota);
                    $nama = implode(" ", $nama_anggota);
                    echo strtok($nama, " "); ?>
                </td>
                <td>
                    <span><strong>Rp</strong></span>
                    <?= number_format($x['nominal'], 0, ',', '.') ?>

                </td>
                <td>
                    <?= $x['tipe_bayar'] ?>
                </td>
                <td>
                    <img src='kwitansi/<?= $x['kwitansi'] ?>' alt='<?= $x['kwitansi'] ?>' width='175px' height='175px'
                        onclick="openFullScreenImage('kwitansi/<?= $x['kwitansi'] ?>')" style="cursor: pointer;">
                </td>
                <td>
                    <button class="btn btn-info"
                        onclick="openFullScreenImage('kwitansi/<?= $x['kwitansi'] ?>')">View</button>
                    <a class="btn btn-warning" href="delete_transaksi<?= $x['id_transaksi']; ?>">Terima</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- Image Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Kwitansi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    onclick="closeImageModal()"></button>
            </div>
            <div class="modal-body">
                <img id="modalImage" src="" alt="Kwitansi" class="img-fluid">
            </div>
        </div>
    </div>

    <?php include '../../../footer_petugas.php'; ?>