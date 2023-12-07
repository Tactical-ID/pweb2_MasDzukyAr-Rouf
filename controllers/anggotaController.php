<?php

include_once '../../../models/anggota.php';



class anggotaController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new anggota($db);
    }
    public function getAllAnggota()
    {
        return $this->model->getAllanggota();
    }
    public function createAnggota($nama_anggota, $alamat, $no_hp, $tgl_gabung, $no_ktp)
    {
        return $this->model->createAnggota($nama_anggota, $alamat, $no_hp, $tgl_gabung, $no_ktp);
    }
    public function delete($id_anggota)
    {
        return $this->model->delete($id_anggota);
    }
    public function updateAnggota($id_anggota, $nama_anggota, $alamat, $no_hp, $tgl_gabung, $no_ktp, )
    {
        return $this->model->updateAnggota($id_anggota, $nama_anggota, $alamat, $no_hp, $tgl_gabung, $no_ktp);
    }
    public function getAnggotaByid_anggota($id_anggota)
    {
        return $this->model->getAnggotaByid_anggota($id_anggota);
    }
    public function getNamaById($id_anggota)
    {
        return $this->model->getNamaById($id_anggota);
    }

}
