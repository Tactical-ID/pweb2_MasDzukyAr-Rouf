<?php

//panggil class
include_once '../../../config.php';
include_once '../../../controllers/petugasController.php';

//instasisasi
$database = new database;
$db = $database->getKoneksi();

$id_petugas = $_POST['id_petugas'];
$nama_petugas = $_POST['nama_petugas'];
$jabatan = $_POST['jabatan'];
$no_hp = $_POST['no_hp'];

$petugasController = new petugasController($db);
$result = $petugasController->updatepetugas($id_petugas, $nama_petugas, $jabatan, $no_hp);



if ($result) {
    header("Location: edit_petugas_success");
} else {
    echo "ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ";

}
