<?php

class database{
    var $host;
    var $username = "root";
    var $password = "";
    var $db = "koperasi";
    var $koneksi;

    function getKoneksi(){
        $this->koneksi = mysqli_connect($this->host,$this->username,$this->password,$this->db);
        if(!$this->koneksi){
            die("Koneksi Gagal: " . mysqli_connect_error());

        }
        return $this->koneksi;
    }
}
