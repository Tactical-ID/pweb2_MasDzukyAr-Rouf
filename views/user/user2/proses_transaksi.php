<?php
include '../../../header_anggota.php';
include '../../../controllers/transaksiController.php';
include_once '../../../config.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve data from the form
    $id_anggota = $_POST['id_anggota'];
    $nominal = (float) str_replace(',', '', $_POST['nominal']);
    $tipe_bayar = $_POST['tipe_bayar'];

    // Process the file upload
    $uploadDir = '../../../kwitansi/';
    $kwitansi = $_FILES['kwitansi']['name'];
    $uploadFile = $uploadDir . $kwitansi;

    // Check for file upload errors
    if ($_FILES['kwitansi']['error'] !== UPLOAD_ERR_OK) {
        echo "File upload failed with error code: " . $_FILES['kwitansi']['error'];
        exit();
    }

    // Move the uploaded file to the destination directory
    if (move_uploaded_file($_FILES['kwitansi']['tmp_name'], $uploadFile)) {
        // File upload successful
        $database = new database;
        $db = $database->getKoneksi();
        $transaksiController = new transaksiController($db);

        // Create transaction
        $result = $transaksiController->createTransaksi($id_anggota, $nominal, $tipe_bayar, $kwitansi);

        if ($result) {
            header('Location: success_transaksi' . urlencode($id_anggota));
            exit();
        } else {
            header('location : gagal_transaksi' . urlencode($id_anggota));
        }
    } else {
        echo "File move failed.";
    }
}