<?php
    include "koneksi.php";
    
    
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $metode = $_POST['metode'];
    $total = $harga * $jumlah;

    
    $query = mysqli_query($koneksi, "INSERT INTO tabel_riwayat (NAMA_BARANG,HARGA_SATUAN,JUMLAH,TOTAL_HARGA,METODE_P) VALUES ('$nama_barang','$harga','$jumlah','$total','$metode')");
    if($query){
        header("location: history.php?message=Data berhasil ditambahkan.");
    }else{
        header("location: history.php?message=Data gagal ditambahkan.");
    }
?>