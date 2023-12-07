<?php
class transaksi
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function createTransaksi($id_anggota, $nominal, $tipe_bayar, $kwitansi)
    {
        $query = "INSERT INTO transaksi (id_anggota, nominal, tipe_bayar, kwitansi) VALUES (?, ?, ?, ?)";

        // Use prepared statement
        $stmt = mysqli_prepare($this->koneksi, $query);

        // Bind parameters
        mysqli_stmt_bind_param($stmt, "isss", $id_anggota, $nominal, $tipe_bayar, $kwitansi);

        // Execute statement    
        $result = mysqli_stmt_execute($stmt);

        // Close statement
        mysqli_stmt_close($stmt);

        return $result;
    }
    
    public function getAlltransaksi()
    {
        $query = "SELECT * FROM  transaksi";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }
    function proses_pembayaran($id_transaksi)
    {
        $query = "get nominal from transaksi where id_transaksi='$id_transaksi'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
