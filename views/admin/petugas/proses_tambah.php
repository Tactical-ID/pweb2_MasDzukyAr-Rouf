<?php

//panggil class
include_once '../../../config.php';
include_once '../../../controllers/petugasController.php';

//instasisasi
$database = new database;
$db = $database->getKoneksi();

$nama_petugas = $_POST['nama_petugas'];
$jabatan = $_POST['jabatan'];
$no_hp = $_POST['no_hp'];

$petugasController = new petugasController($db);
$result = $petugasController->createpetugas($nama_petugas, $jabatan, $no_hp);


if ($result) {
    header("Location: tambah_petugas_success");

} else {
    echo "ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ";
}
