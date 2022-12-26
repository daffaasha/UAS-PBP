<?php   
    include "koneksi.php";

    $ID_USER = $_GET['ID_USER'];
    $query = mysqli_query($koneksi, "DELETE FROM tabel_user WHERE ID_USER = $ID_USER");
    if($query){
        header("location: admin.php?message=Data berhasil dihapus.");
    }else{
        header("location: admin.php?message=Data gagal dihapus.");
    }

?>