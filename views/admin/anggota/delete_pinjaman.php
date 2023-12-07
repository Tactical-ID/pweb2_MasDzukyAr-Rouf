<?php

//panggil class
include_once '../../../config.php';
include_once '../../../controllers/pengajuanController.php';

//instasisasi
$database = new database;
$db = $database->getKoneksi();

$id_pinjaman = $_GET['id_pinjaman'];
$pengajuanController = new pengajuanController($db);
$result = $pengajuanController->delete($id_pinjaman);



if ($result) {
    header("Location: penyetujuan_pinjaman_success");

} else {
    echo "ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ";

}
