<?php 
 
$server = "localhost:3308";
$user = "root";
$pass = "root";
$database = "pet_star";
 
$koneksi = mysqli_connect($server, $user, $pass, $database);
 
if (!$koneksi) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>