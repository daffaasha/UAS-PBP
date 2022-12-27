<?php

    include "koneksi.php";

    $id_barang = $_POST['id_barang'];
    $foto = $_POST['foto'];
    $produk = $_POST['produk'];
    $harga = $_POST['harga'];
    // echo "<p>$id_user</p>";
    // echo "<p>$nama</p>";
    // echo "<p>$username</p>";
    // echo "<p>$password</p>";
    // echo "<p>$email</p>";
    // echo "<p>$number</p>";

    $query = mysqli_query($koneksi, "UPDATE tabel_barang SET  FOTO = '$foto', NAMA_BARANG = '$produk', HARGA = '$harga' WHERE ID_BARANG = '$id_barang'");
    if($query){
        header("location: home.php?message=Data berhasil diubah.");
    }else{
        header("location: home.php?message=Data gagal diubah.");
    }
?>