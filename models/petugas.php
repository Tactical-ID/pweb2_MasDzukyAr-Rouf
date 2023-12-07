<?php


class petugas
{
    private $koneksi;


    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllpetugas()
    {
        $query = "SELECT * FROM  petugas";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createpetugas($nama_petugas, $jabatan, $no_hp)
    {
        $query = "insert into petugas (nama_petugas,jabatan,no_hp) values ('$nama_petugas','$jabatan','$no_hp')";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }

    }
    public function getpetugasByid_petugas($id_petugas)
    {
        $query = "select * from petugas where id_petugas ='$id_petugas'";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_array($result);
    }

    public function updatepetugas($id_petugas, $nama_petugas, $jabatan, $no_hp)
    {
        $query = "update petugas set nama_petugas='$nama_petugas', jabatan ='$jabatan',no_hp='$no_hp'  where id_petugas='$id_petugas'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    function delete($id_petugas)
    {
        $query = "delete from petugas where id_petugas='$id_petugas'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
