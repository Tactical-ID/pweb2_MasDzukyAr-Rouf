<?php

include_once 'models/login.php';

class loginController
{


    private $model;

    public function __construct($db)
    {
        $this->model = new login($db);
    }
    public function getrole($username, $password)
    {
        return $this->model->getrole($username, $password);

    }
}