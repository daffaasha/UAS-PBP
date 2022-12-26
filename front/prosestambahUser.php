<?php
    include "koneksi.php";
    
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $level = 'pegawai';

    $query = mysqli_query($koneksi, "INSERT INTO tabel_user (USERNAME,PASSWORD,NAMA,EMAIL,NUMBER,LEVEL) VALUES ('$username','$password','$nama','$email','$number','$level')");
    if($query){
        header("location: admin.php?message=Data berhasil ditambahkan.");
    }else{
        header("location: admin.php?message=Data gagal ditambahkan.");
    }
?>


