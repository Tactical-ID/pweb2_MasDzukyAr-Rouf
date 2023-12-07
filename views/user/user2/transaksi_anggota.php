<?php
include_once '../../../config.php';

$database = new Database;
$db = $database->getKoneksi();

$id_anggota = $_GET['id_anggota'];

include '../../../header_anggota.php';
?>
<script src="https://cdn.jsdelivr.net/npm/wow.js@1.1.2/dist/wow.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8" style="margin-top: 50px;">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-left">Transaksi</h1>
                </div>
                <div class="card-body">

                    <form action="proses_transaksi" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="id_anggota" class="form-label">ID Anggota</label>
                            <input type="text" class="form-control" name="id_anggota"
                                value="<?php echo $_GET['id_anggota']; ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="nominal" class="form-label">Nominal</label>
                            <div class="input-group">
                                <span class="input-group-text">Rp</span>
                                <input type="text" id="inputField" name="nominal" oninput="formatCurrency(this)">
                            </div>
                        </div>


                        <label for="kwitansi" class="form-label">Foto Kwitansi</label>
                        <div class="mb-3">
                            <input type="file" class="form-control" id="kwitansi" name="kwitansi"
                                accept=".jpg, .jpeg, .png" required><br>
                        </div>
                        <div class="mb-3">
                            <label for="tipe_bayar" class="form-label">Tipe Bayar</label>
                            <select class="form-select" name="tipe_bayar">
                                <option value="pinjaman">Pinjaman</option>
                                <option value="simpanan">Simpanan</option>
                            </select>
                        </div>
                        <div class="text-left" style="margin-top: 5%;">
                            <input type="submit" class="btn btn-primary" value="Simpan">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>

<script>
    function formatCurrency(input) {
        let value = input.value.replace(/[^\d]/g, ''); // Remove non-numeric characters

        // Format the value with dots for every three digits
        value = new Intl.NumberFormat().format(value);

        // Add "Rp" to the front
        input.value = `${value}`;

        // Display the formatted value in the label
        document.getElementById('formattedValueLabel').textContent = `${value}`;
    }

</script>