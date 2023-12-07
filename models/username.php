<?php


class username
{
    private $koneksi;


    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function username($id_anggota)
    {
        $query = ("SELECT `username` FROM `role` WHERE `id_anggota` = '$id_anggota'");

        $result = mysqli_query($this->koneksi, $query);
        $row = mysqli_fetch_assoc($result);
        return strtoupper($row['username']);

    }


}