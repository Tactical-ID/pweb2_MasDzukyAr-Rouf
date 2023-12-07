<?php


class login
{
    private $koneksi;


    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getrole($username, $password)
    {
        $query = ("select * from role where username='$username' and password='$password'");
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }



}