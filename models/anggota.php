<?php


class anggota
{
    private $koneksi;


    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllAnggota()
    {
        $query = "SELECT * FROM  anggota";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createAnggota($nama_anggota, $alamat, $no_hp, $tgl_gabung, $no_ktp)
    {
        $query = "insert into anggota (nama_anggota,alamat,no_hp,tgl_gabung,no_ktp) values ('$nama_anggota','$alamat','$no_hp','$tgl_gabung','$no_ktp')";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }

    }
    public function getAnggotaByid_anggota($id_anggota)
    {
        $query = "select * from anggota where id_anggota ='$id_anggota'";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_array($result);
    }

    public function updateAnggota($id_anggota, $nama_anggota, $alamat, $no_hp, $tgl_gabung, $no_ktp)
    {
        $query = "update anggota set id_anggota ='$id_anggota',nama_anggota='$nama_anggota', alamat='$alamat', no_hp='$no_hp', tgl_gabung='$tgl_gabung', no_ktp='$no_ktp' where id_anggota='$id_anggota'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    function delete($id_anggota)
    {
        $query = "delete from anggota where id_anggota='$id_anggota'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    function getNamaById($id_anggota)
    {
        $query = "select nama_anggota from anggota where id_anggota = '$id_anggota'";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_array($result);
    }
}
