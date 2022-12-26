<?php
    include "koneksi.php";
    
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    // $filename = $_FILES["uploadfile"]["name"];
    // $tempname = $_FILES["uploadfile"]["tmp_name"];
    // $folder = "./image/" . $filename;
    $level = 'pegawai';

    $query = mysqli_query($koneksi, "INSERT INTO tabel_user (USERNAME,PASSWORD,NAMA,EMAIL,NUMBER,LEVEL,FOTO) VALUES ('$username','$password','$nama','$email','$number','$level','$filename')");
    if($query){
        move_uploaded_file($tempname, $folder);
        header("location: admin.php?message=Data berhasil ditambahkan.");
    }else{
        header("location: admin.php?message=Data gagal ditambahkan.");
    }
?>


