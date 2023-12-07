<?php

include_once '../../../models/shu.php';

class shuController
{


    private $model;

    public function __construct($db)
    {
        $this->model = new shu($db);
    }
    public function getshuByid($id_anggota)
    {
        return $this->model->getshuByid($id_anggota);

    }
}