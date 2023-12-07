<?php


class pengajuan
{
    private $koneksi;


    public function __construct($db)
    {
        $this->koneksi = $db;
    }
    public function getAllpengajuan()
    {
        $query = "SELECT * FROM  pengajuan";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createPengajuan($id_anggota, $tgl_jatuh_tempo, $jumlah_pinjaman)
    {
        $query = ("insert into pengajuan (id_anggota, tgl_jatuh_tempo, jumlah_pinjaman) values ('$id_anggota' , '$tgl_jatuh_tempo', '$jumlah_pinjaman')");
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function delete($id_pinjaman)
    {
        $query = "delete from pengajuan where id_pinjaman='$id_pinjaman'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }




}