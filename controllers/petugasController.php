<?php

include_once '../../../models/petugas.php';


class petugasController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new petugas($db);
    }
    public function getAllpetugas()
    {
        return $this->model->getAllpetugas();
    }
    public function createpetugas($nama_petugas, $jabatan, $no_hp)
    {
        return $this->model->createpetugas($nama_petugas, $jabatan, $no_hp);
    }
    public function delete($id_petugas)
    {
        return $this->model->delete($id_petugas);
    }
    public function updatepetugas($id_petugas, $nama_petugas, $jabatan, $no_hp)
    {
        return $this->model->updatepetugas($id_petugas, $nama_petugas, $jabatan, $no_hp);
    }
    public function getpetugasByid($id_petugas)
    {
        return $this->model->getpetugasByid_petugas($id_petugas);
    }
}
