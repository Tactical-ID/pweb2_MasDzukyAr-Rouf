<?php

include_once '../../../models/pinjaman.php';

class pinjamanController
{


    private $model;

    public function __construct($db)
    {
        $this->model = new pinjaman($db);
    }
    public function getpinjamanByid($id_anggota)
    {
        return $this->model->getpinjamanByid($id_anggota);

    }
}