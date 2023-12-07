<?php
include_once '../../../config.php';
include_once '../../../controllers/anggotaController.php';

$database = new database;
$db = $database->getKoneksi();

$anggotaController = new anggotaController($db);
$anggota = $anggotaController->getAllAnggota();
?>

<?php include '../../../header_petugas.php'; ?>

<div class="pagetitle" style="margin-top: 10%;">
    <h1>Daftar Anggota</h1>
</div><!-- End Page Title -->

<section class="section dashboard">
    <div class="row">
        <div class="col-12">
            <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    <a href='tambah_anggota' class="btn btn-success mb-2 mt-4">Tambah Data</a>

                    <?php
                    error_reporting(E_ERROR | E_PARSE);

                    if ($_GET['success'] === "tambah") {
                        echo '<div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                                <strong>Berhasil Ditambahkan</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                                    onclick="window.location.href=\'anggota\'"></button>
                              </div>';
                    } elseif ($_GET['success'] === "update") {
                        echo '<div class="alert alert-primary alert-dismissible fade show mb-4" role="alert">
                                <strong>Berhasil Diedit</strong> 
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                                    onclick="window.location.href=\'anggota\'"></button>
                              </div>';
                    } elseif ($_GET['success'] === "hapus") {
                        echo '<div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                                <strong>Berhasil Dihapus</strong> 
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                                    onclick="window.location.href=\'anggota \'"></button>
                              </div>';
                    }
                    ?>

                    <table class="table table-bordered table-striped">
                        <thead class="" style="background-color: #86b049; color: white; border-color: black;">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No. HP</th>
                                <th scope="col">Tanggal Bergabung</th>
                                <th scope="col">No. KTP</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($anggota as $x) { ?>
                                <tr>
                                    <td>
                                        <?php echo $x['id_anggota']; ?>
                                    </td>
                                    <td>
                                        <?php echo $x['nama_anggota']; ?>
                                    </td>
                                    <td>
                                        <?php echo $x['alamat']; ?>
                                    </td>
                                    <td>
                                        <?php echo $x['no_hp']; ?>
                                    </td>
                                    <td>
                                        <?php echo $x['tgl_gabung']; ?>
                                    </td>
                                    <td>
                                        <?php echo $x['no_ktp']; ?>
                                    </td>
                                    <td>
                                        <a class="btn btn-warning" href="edit_anggota<?php echo $x['id_anggota']; ?>">Edit</a>
                                        <a class="btn btn-danger" href="hapus_anggota<?php echo $x['id_anggota']; ?>" onclick="return confirm('Apakah anda ingin menghapus data ini')">Hapus</a>
                                        <a class="btn btn-warning" href="cek<?php echo $x['id_anggota']; ?>">Cek</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div><!-- End Left side columns -->
</section>

<?php include '../../../footer_petugas.php'; ?>