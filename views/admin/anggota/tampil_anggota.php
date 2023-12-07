<?php
// Include file-file yang diperlukan dan ambil data simpanan, pinjaman, dan SHU berdasarkan id_anggota
include_once '../../../config.php';
include_once '../../../controllers/simpananController.php';
include_once '../../../controllers/pinjamanController.php';
include_once '../../../controllers/shuController.php';
// include_once '../../../controllers/usernameController.php';

$database = new Database;
$db = $database->getKoneksi();

$id_anggota = $_GET['id_anggota'];
$simpananController = new simpananController($db);
$pinjamanController = new pinjamanController($db);
$shuController = new shuController($db);
// $usernameController = new usernameController($db);

$simpanan = $simpananController->getsimpananByid($id_anggota);
$pinjaman = $pinjamanController->getpinjamanById($id_anggota);
$shu = $shuController->getshuById($id_anggota);
// $username = $usernameController->username($id_anggota);
?>
<?php
include '../../../header_petugas.php';
?>

<style>
    .card-title-bg {
        background-color: #007bff;
        color: #fff;
        padding: 8px;
        margin-bottom: 0;
        border-radius: 0.25rem 0.25rem 0 0;
    }

    .card-text {
        font-size: 18px;
    }
</style>

<div class="container mt-5">
    <div class="row justify-content-around" style="margin-top: 10%;">
        <div class="col-md-3">
            <div class="card">
                <div class="card-title card-title-bg" style="background-color: #86b049;">
                    <h3 class="mb-0" ><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-piggy-bank-fill" viewBox="0 0 16 16">
                            <path d="M7.964 1.527c-2.977 0-5.571 1.704-6.32 4.125h-.55A1 1 0 0 0 .11 6.824l.254 1.46a1.5 1.5 0 0 0 1.478 1.243h.263c.3.513.688.978 1.145 1.382l-.729 2.477a.5.5 0 0 0 .48.641h2a.5.5 0 0 0 .471-.332l.482-1.351c.635.173 1.31.267 2.011.267.707 0 1.388-.095 2.028-.272l.543 1.372a.5.5 0 0 0 .465.316h2a.5.5 0 0 0 .478-.645l-.761-2.506C13.81 9.895 14.5 8.559 14.5 7.069c0-.145-.007-.29-.02-.431.261-.11.508-.266.705-.444.315.306.815.306.815-.417 0 .223-.5.223-.461-.026a.95.95 0 0 0 .09-.255.7.7 0 0 0-.202-.645.58.58 0 0 0-.707-.098.735.735 0 0 0-.375.562c-.024.243.082.48.32.654a2.112 2.112 0 0 1-.259.153c-.534-2.664-3.284-4.595-6.442-4.595Zm7.173 3.876a.565.565 0 0 1-.098.21.704.704 0 0 1-.044-.025c-.146-.09-.157-.175-.152-.223a.236.236 0 0 1 .117-.173c.049-.027.08-.021.113.012a.202.202 0 0 1 .064.199Zm-8.999-.65a.5.5 0 1 1-.276-.96A7.613 7.613 0 0 1 7.964 3.5c.763 0 1.497.11 2.18.315a.5.5 0 1 1-.287.958A6.602 6.602 0 0 0 7.964 4.5c-.64 0-1.255.09-1.826.254ZM5 6.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0" />
                        </svg>&nbspSimpanan</h3>
                </div>
                <div class="card-body">
                    <?php if ($simpanan): ?>
                        <p class="card-text" style="font-size: 24px;">Jumlah Simpanan: <strong>Rp
                                <?= number_format($simpanan['jumlah_simpanan'], 0, ',', '.'); ?>
                            </strong></p>
                        <!-- Tambahan informasi simpanan lainnya sesuai kebutuhan -->
                    <?php else: ?>
                        <p class="card-text">Belum ada data simpanan untuk anggota ini.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-title card-title-bg" style="background-color: #86b049;">
                    <h3 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-earmark-medical" viewBox="0 0 16 16">
  <path d="M7.5 5.5a.5.5 0 0 0-1 0v.634l-.549-.317a.5.5 0 1 0-.5.866L6 7l-.549.317a.5.5 0 1 0 .5.866l.549-.317V8.5a.5.5 0 1 0 1 0v-.634l.549.317a.5.5 0 1 0 .5-.866L8 7l.549-.317a.5.5 0 1 0-.5-.866l-.549.317V5.5zm-2 4.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1z"/>
  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
</svg>&nbspPinjaman</h3>
                </div>
                <div class="card-body">
                    <?php if ($pinjaman): ?>
                        <p class="card-text" style="font-size: 24px;">Jumlah Pinjaman: <strong>Rp
                                <?= number_format($pinjaman['jumlah_pinjaman'], 0, ',', '.'); ?>
                            </strong></p>
                        <!-- Tambahan informasi pinjaman lainnya sesuai kebutuhan -->
                    <?php else: ?>
                        <p class="card-text">Belum ada data pinjaman untuk anggota ini.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-title card-title-bg"style="background-color: #86b049;">
                    <h3 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
  <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
</svg>&nbspSHU</h3>
                </div>
                <div class="card-body">
                    <?php if ($shu): ?>
                        <p class="card-text">Jumlah SHU:</p>
                        <h4 class="mb-0" style="font-size: 24px;"><strong>Rp
                                <?= number_format($shu['nominal_shu'], 0, ',', '.'); ?>
                            </strong></h4>
                        <!-- Tambahan informasi SHU lainnya sesuai kebutuhan -->
                    <?php else: ?>
                        <p class="card-text">Belum ada data SHU untuk anggota ini.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
include '../../../footer_petugas.php';
?>