<?php


class simpanan
{
    private $koneksi;


    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getsimpananById($id_anggota)
    {
        $query = "SELECT * FROM simpanan WHERE id_anggota = '$id_anggota'";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

}