<?php

//panggil class
include_once '../../../config.php';
include_once '../../../controllers/petugasController.php';

//instasisasi
$database = new database;
$db = $database->getKoneksi();

$id_petugas = $_GET['id_petugas'];
$petugasController = new petugasController($db);
$result = $petugasController->delete($id_petugas);



if ($result) {
    header("Location: hapus_petugas_succes");


} else {
    echo "ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ";

}
