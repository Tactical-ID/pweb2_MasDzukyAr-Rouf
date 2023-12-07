<?php

//panggil class
include_once '../../../config.php';
include_once '../../../controllers/anggotaController.php';

//instasisasi
$database = new database;
$db = $database->getKoneksi();

$nama_anggota = $_POST['nama_anggota'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$tgl_gabung = $_POST['tgl_gabung'];
$no_ktp = $_POST['no_ktp'];

$anggotaController = new anggotaController($db);
$result = $anggotaController->createAnggota($nama_anggota, $alamat, $no_hp, $tgl_gabung, $no_ktp);

if ($result) {
    header("location: tambah_anggota_success");
} else {
    echo "ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ";
}
