<?php

include_once '../../../models/username.php';

class usernameController
{


    private $model;

    public function __construct($db)
    {
        $this->model = new username($db);
    }
    public function username($id_anggota)
    {
        return $this->model->username($id_anggota);

    }
}