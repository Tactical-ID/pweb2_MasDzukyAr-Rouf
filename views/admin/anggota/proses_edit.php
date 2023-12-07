<?php

//panggil class
include_once '../../../config.php';
include_once '../../../controllers/anggotaController.php';

//instasisasi
$database = new database;
$db = $database->getKoneksi();

$id_anggota = $_POST['id_anggota'];
$nama_anggota = $_POST['nama_anggota'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$tgl_gabung = $_POST['tgl_gabung'];
$no_ktp = $_POST['no_ktp'];
$anggotaController = new anggotaController($db);
$result = $anggotaController->updateAnggota($id_anggota, $nama_anggota, $alamat, $no_hp, $tgl_gabung, $no_ktp);



if ($result) {
    header("Location: edit_anggota_success");


} else {
    echo "ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ";

}
