<?php

include_once '../../../models/pengajuan.php';

class pengajuanController
{


    private $model;

    public function __construct($db)
    {
        $this->model = new pengajuan($db);
    }

    public function getAllpengajuan()
    {
        return $this->model->getAllPengajuan();
    }
    public function createPengajuan($id_anggota, $tgl_jatuh_tempo, $jumlah_pinjaman)
    {
        return $this->model->createPengajuan($id_anggota, $tgl_jatuh_tempo, $jumlah_pinjaman);

    }
    public function delete($id_pinjaman)
    {
        return $this->model->delete($id_pinjaman);
    }

}