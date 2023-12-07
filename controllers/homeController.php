<?php
class HomeController
{


    public function selesaitambahmhs()
    {
        header("Location: tambah_successmhs");
    }
    public function selesaiupdatemhs()
    {
        header("Location: update_successmhs");
    }
    public function selesaihapusmhs()
    {
        header("Location: hapus_successmhs");
    }

    // dosen //////////////////////////////////////////////////

    public function dosenPage($success)
    {

        header("location:http://localhost/Jobsheet5/views/dosen/index.php");

    }

    public function selesaitambahdsn()
    {
        header("Location: tambah_successdsn");
    }
    public function selesaiupdatedsn()
    {
        header("Location: update_successdsn");
    }
    public function selesaihapusdsn()
    {
        header("Location: hapus_successdsn");
    }
}