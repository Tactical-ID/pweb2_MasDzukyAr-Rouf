<?php
include_once '../../../config.php';

$database = new Database;
$db = $database->getKoneksi();

include '../../../header_petugas.php';
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<div class="px-4 py-3" style="margin-top: 85px; ">
    <h3>Tambah Anggota</h3>
    <div class="card px-3 py-3" style="width: 50%;">

        <form action="proses_tambah_anggota" method="post">
            <div class="mb-3">
                <label for="nama_anggota" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama_anggota">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat"></textarea>
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">NO HP</label>
                <input type="number" placeholder="+62XXXXXXXXXXX" class="form-control" name="no_hp">
            </div>
            <div class="mb-3">
                <label for="tgl_gabung" class="form-label">Tanggal Bergabung</label>
                <input type="date" class="form-control" name="tgl_gabung">
            </div>
            <div class="mb-3">
                <label for="no_ktp" class="form-label">No KTP</label>
                <input type="number" class="form-control" name="no_ktp">
            </div>
            <div class="text-left">
                <input type="submit" class="btn btn-primary" value="Simpan">
            </div>
        </form>
    </div>
</div>

<?php
include '../../../footer_petugas.php';
?>
