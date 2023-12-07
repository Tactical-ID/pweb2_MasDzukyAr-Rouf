<?php
//mulai session
session_start();

//koneksi ke database
include_once "config.php";
include_once 'controllers/loginController.php';

$database = new database;
$db = $database->getKoneksi();


$username = $_POST['nama'];
$password = $_POST['katakunci'];


$loginController = new loginController($db);
$result = $loginController->getrole($username, $password);



//cek data
$cek = mysqli_num_rows($result);

if ($cek > 0) {
    // Check if the user is an admin
    $row = mysqli_fetch_assoc($result);
    if ($row['role'] == 'admin') { // Assuming there is a 'role' column in tbl_admin to differentiate admins and regular users
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        header("location: admin"); // Redirect admins to pengajuando.php
    } elseif ($row["role"] == "anggota") {
        $_SESSION["username"] = $username;
        header("location:  anggota{$row['id_anggota']}"); // Redirect regular users to pengajuando2.php
    }
} else {
    header("location: pages-login.php?pesan=gagal");
}
?>