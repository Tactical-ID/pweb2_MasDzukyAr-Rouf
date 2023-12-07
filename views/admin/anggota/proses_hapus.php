<?php

//panggil class
include_once '../../../config.php';
include_once '../../../controllers/anggotaController.php';

//instasisasi
$database = new database;
$db = $database->getKoneksi();

$id_anggota = $_GET['id_anggota'];
$anggotaController = new anggotaController($db);
$result = $anggotaController->delete($id_anggota);



if ($result) {
    header("Location: hapus_anggota_succes");


} else {
    echo "ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ";

}
