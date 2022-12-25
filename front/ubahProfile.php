<?php
    include "koneksi.php";

    $id_user = $_POST['id_user'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $number = $_POST['number'];

    $query = mysqli_query($koneksi, "UPDATE tabel_user SET NAMA = '$nama', USERNAME = '$username',PASSWORD = '$password',EMAIL = '$email',NUMBER = '$number',  WHERE ID_USER = '$id_user'");
    if($query){
        header("location: profile.php?message=Data berhasil diubah.");
    }else{
        header("location: profile.php?message=Data gagal diubah.");
    }
?>