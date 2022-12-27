<?php   
    include "koneksi.php";

    $ID_BARANG = $_GET['ID_BARANG'];
    $query = mysqli_query($koneksi, "DELETE FROM tabel_barang WHERE ID_BARANG = $ID_BARANG");
    if($query){
        header("location: home.php?message=Data berhasil dihapus.");
    }else{
        header("location: home.php?message=Data gagal dihapus.");
    }

?>