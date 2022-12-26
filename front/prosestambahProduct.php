<?php
    include "koneksi.php";
    
    $foto = $_POST['foto'];
    $produk = $_POST['produk'];
    $harga = $_POST['harga'];


    $query = mysqli_query($koneksi, "INSERT INTO tabel_barang (NAMA_BARANG,FOTO,HARGA) VALUES ('$produk','$foto','$harga')");
    if($query){
        header("location: home.php?message=Data berhasil ditambahkan.");
    }else{
        header("location: home.php?message=Data gagal ditambahkan.");
    }
?>