<?php
include '../../../header_petugas.php';
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<div class="px-4 py-3" style="margin-top: 85px;">
    <h3>Tambah Petugas</h3>
    <div class="card px-3 py-3" style="width: 30%;">

        <form action="proses_tambah_petugas" method="post">
            <div class="mb-3">
                <label for="nama_petugas" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama_petugas">
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" class="form-control" name="jabatan">
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">No HP</label>
                <input type="number" class="form-control" name="no_hp">
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