<?php

    include "koneksi.php";

    $id_user = $_POST['id_user'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    // echo "<p>$id_user</p>";
    // echo "<p>$nama</p>";
    // echo "<p>$username</p>";
    // echo "<p>$password</p>";
    // echo "<p>$email</p>";
    // echo "<p>$number</p>";

    $query = mysqli_query($koneksi, "UPDATE tabel_user SET  USERNAME = '$username', PASSWORD = '$password', NAMA = '$nama', EMAIL = '$email', NUMBER = '$number' WHERE ID_USER = '$id_user'");
    if($query){
        header("location: admin.php?message=Data berhasil diubah.");
    }else{
        header("location: admin.php?message=Data gagal diubah.");
    }
?>