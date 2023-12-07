<?php


class pinjaman
{
    private $koneksi;


    public function __construct($db)
    {
        $this->koneksi = $db;
    }
    
    public function getpinjamanById($id_anggota) {
        $query = "SELECT * FROM pinjaman WHERE id_anggota = '$id_anggota'";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

}