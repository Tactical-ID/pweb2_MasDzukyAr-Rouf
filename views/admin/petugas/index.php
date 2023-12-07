<?php
include_once '../../../config.php';
include_once '../../../controllers/petugasController.php';

$database = new database;
$db = $database->getKoneksi();

$petugasController = new petugasController($db);
$petugas = $petugasController->getAllpetugas();
?>

<?php include '../../../header_petugas.php'; ?>

<div class="pagetitle" style="margin-top: 10%;">
  <h1>Daftar Petugas</h1>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">

    <!-- Recent Sales -->
    <div class="col-12">
      <div class="card recent-sales overflow-auto">

        <div class="card-body">
          <a href='tambah_petugas' class="btn btn-success mb-2 mt-4">Tambah Data</a>

          <?php
          error_reporting(E_ERROR | E_PARSE);

          if ($_GET['success'] === "tambah") {
            echo '<div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                                <strong>Berhasil Ditambahkan</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                                    onclick="window.location.href=\'petugas\'"></button>
                              </div>';
          } elseif ($_GET['success'] === "update") {
            echo '<div class="alert alert-primary alert-dismissible fade show mb-4" role="alert">
                                <strong>Berhasil Diedit</strong> 
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                                    onclick="window.location.href=\'petugas\'"></button>
                              </div>';
          } elseif ($_GET['success'] === "hapus") {
            echo '<div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                                <strong>Berhasil Dihapus</strong> 
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                                    onclick="window.location.href=\'petugas \'"></button>
                              </div>';
          }
          ?>

          <table class="table table-bordered table-striped">
            <thead class="" style="background-color: #86b049; color: white; border-color: black;">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Jabatan</th>
                <th scope="col">No HP</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($petugas as $x) : ?>
                <tr>
                  <td>
                    <?= $x['id_petugas'] ?>
                  </td>
                  <td>
                    <?= $x['nama_petugas'] ?>
                  </td>
                  <td>
                    <?= $x['jabatan'] ?>
                  </td>
                  <td>
                    <?= $x['no_hp'] ?>
                  </td>
                  <td>
                    <a class="btn btn-warning" href="edit_petugas<?= $x['id_petugas']; ?>">Edit</a>
                    <a class="btn btn-danger" href="hapus_petugas<?= $x['id_petugas']; ?>" onclick="return confirm('Apakah anda ingin menghapus data ini')">Hapus</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include '../../../footer_petugas.php'; ?>