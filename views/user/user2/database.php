<?php 

class database {
    var $host = "localhost"; // localhost or your host name
    var $user = "root"; // username of the database
    var $pass = ""; // password for the user
    var $db = "ta"; // name of the database
    var $koneksi;
    public function __construct() 
    {
        $this->koneksi = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
    }

    function tampil_acara()
    {
        return $query=mysqli_query($this->koneksi,"SELECT * FROM acara");
        while($row=mysqli_fetch_array($data)){
            $hasil[]= $d;
        }
        return $hasil;
    }

    function tambah_acara($nama_acara,$lokasi,$tanggal_mulai,$tanggal_selesai,$keterangan,$gambar)
    {
      mysqli_query($this->koneksi,"INSERT INTO acara(nama_acara,lokasi,tanggal_mulai,tanggal_selesai,keterangan,gambar) VALUES ('$nama_acara','$lokasi','$tanggal_mulai','$tanggal_selesai','$keterangan','$gambar')");
    }
    
    function edit_acara($id_acara, $nama_acara, $lokasi, $tanggal_mulai, $tanggal_selesai, $keterangan, $gambar)
    {
    mysqli_query($this->koneksi, "UPDATE acara SET nama_acara='$nama_acara', lokasi='$lokasi', tanggal_mulai='$tanggal_mulai', tanggal_selesai='$tanggal_selesai', keterangan='$keterangan', gambar='$gambar' WHERE id_acara='$id_acara'");
    }

    function update_acara($id_acara)
    {
        return $query=mysqli_query($this->koneksi,"SELECT * FROM acara WHERE id_acara=$id_acara");
        while ($row=mysql_fetch_array($data)){
            $hasil[]= $d;
        }
        return $hasil;
    }

    function hapus_acara($id_acara) {
        // Ensure proper escaping to prevent SQL injection
        $id_acara = mysqli_real_escape_string($this->koneksi, $id_acara);
    
        $stmt = $this->koneksi->prepare("DELETE FROM acara WHERE id_acara = ?");
        $stmt->bind_param("s", $id_acara);
    
        // Execute the prepared statement
        if ($stmt->execute()) {
            $stmt->close();
            return true; // Deletion successful
        } else {
            // Handle the error if deletion fails
            return false;
        }
    }
    function get_acara_image($id_acara) {
        // Ensure proper escaping to prevent SQL injection
        $id_acara = mysqli_real_escape_string($this->koneksi, $id_acara);

        // Query the database to get the image filename
        $query = mysqli_query($this->koneksi, "SELECT gambar FROM acara WHERE id_acara = $id_acara");

        if ($row = mysqli_fetch_assoc($query)) {
            return $row['gambar'];
        } else {
            // Return a default value or handle the case where no image is found
            return "default_image.jpg";
        }
    }
}    