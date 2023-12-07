<?php

include_once '../../../models/transaksi.php';

class transaksiController
{


    private $model;

    public function __construct($db)
    {
        $this->model = new transaksi($db);
    }
    public function createTransaksi($id_anggota, $nominal, $tipebayar, $kwitansi)
    {
        return $this->model->createTransaksi($id_anggota, $nominal, $tipebayar, $kwitansi);

    }

    public function getAlltransaksi()
    {
        return $this->model->getAllTransaksi();
    }
    public function delete($id_transaksi)
    {
        // return $this->model->delete($id_transaksi);
    }
}