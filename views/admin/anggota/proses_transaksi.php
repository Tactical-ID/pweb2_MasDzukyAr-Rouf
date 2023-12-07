<?php

//panggil class
include_once '../../../config.php';
include_once '../../../controllers/transaksiController.php';

//instasisasi
$database = new database;
$db = $database->getKoneksi();

$id_transaksi = $_GET['id_transaksi'];
$transaksiController = new transaksiController($db);
$result = $transaksiController->delete($id_transaksi);



if ($result) {
    header("Location: validasi_transaksi_success");

} else {
    echo "ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ";

}
