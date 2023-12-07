<?php

include_once '../../../config.php';
include_once '../../../controllers/pengajuanController.php';

//instasisasi
$database = new database;
$db = $database->getKoneksi();

$id_anggota = $_POST['id_anggota'];
$tgl_jatuh_tempo = $_POST['tgl_jatuh_tempo'];
$jumlah_pinjaman = (float) str_replace(',', '', $_POST['jumlah_pinjaman']);



$pengajuanController = new pengajuanController($db);
$result = $pengajuanController->createPengajuan($id_anggota, $tgl_jatuh_tempo, $jumlah_pinjaman);

if ($result) {
    header("location: success_pengajuan$id_anggota");
} else {
    header("location:gagal_pengajuan$id_anggota");

}