<?php

include_once '../../../models/simpanan.php';

class simpananController
{


    private $model;

    public function __construct($db)
    {
        $this->model = new simpanan($db);
    }
    public function getsimpananByid($id_anggota)
    {
        return $this->model->getsimpananByid($id_anggota);

    }
}