<?php

    include "koneksi.php";

    $ID_RIWAYAT = $_GET['ID_RIWAYAT'];
    $query = mysqli_query($koneksi, "SELECT * FROM `tabel_riwayat` WHERE ID_RIWAYAT = $ID_RIWAYAT ");
    $riwayat = mysqli_fetch_all($query, MYSQLI_ASSOC);  

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail Riwayat</title>
    <!-- logo -->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />

    <!-- css -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700&display=swap" rel="stylesheet" />
</head>

<body>
    <?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['USERNAME']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
    <header>
        <nav>
            <div class="logo">
                <!-- <img src="img/logo.png" alt="" class="logo-kotak" width="25%"> -->
                <img src="img/petstar.png" alt="" width="50%">
            </div>
            <div class="menu">
                <a href="#"><img src="img/history.svg" alt="nama-user" width="75%"></a>
                <a href="profile.php"><img src="img/user-white.svg" alt="setting" width="75%"></a>
            </div>    
                <!-- <ul class="dropdown">
                    <li><a href="#">Log Out</a></li>
                </ul> -->
        </nav>
    </header>
    <main>
        <div class="container flex-content-middle">
            <a href="history.php">
            <img src="img/left-arrow.svg" alt="back" width="24px">
            </a>
            <h2>Riwayat Pembelian</h2>
        </div>
        <!-- <div class="container">
            <h1>Data Admin</h1>
            <button type="submit" class="add">+ Tambah Admin</button>
        </div> -->
        <div class="container">
            <h1>DATA DETAIL RIWAYAT</h1>
            <table class="content-table">
                <thead>
                    <tr>
                        <th class="first">Nama Barang</th>
                        <th>Harga Satuan</th>
                        <th>Jumlah</th>
                        <th class="end" >Harga Sub Total</th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php foreach($riwayat as $r) : ?>
                <tr>
                    <td><?php echo $r["NAMA_BARANG"]; ?></td>
                    <td><?php echo $r["HARGA_SATUAN"]; ?></td>
                    <td><?php echo $r["JUMLAH"];?></td>
                    <td class="end"><?php echo $r["HARGA_S_TOTAL"];?></td>
                </tr>
                <?php endforeach; ?>
                    <!-- <tr class="active-row">
                        <td class="first">1</td>
                        <td>zulfanlorem</td>
                        <td>ganteng</td>
                        <td>uhuyyy</td>
                        <td><img src="img/edit.svg" alt="" width="16px"></td>
                        <td class="end"><img src="img/delete.svg" alt="" width="16px">
                        </td>
                    </tr>
                    <tr class="active-row">
                        <td class="first">1</td>
                        <td>zulfanlorem</td>
                        <td>ganteng</td>
                        <td>uhuyyy</td>
                        <td><img src="img/edit.svg" alt="" width="16px"></td>
                        <td class="end"><img src="img/delete.svg" alt="" width="16px">
                        </td>
                    </tr>
                    <tr class="active-row">
                        <td class="first">1</td>
                        <td>zulfanlorem</td>
                        <td>ganteng</td>
                        <td>uhuyyy</td>
                        <td><img src="img/edit.svg" alt="" width="16px"></td>
                        <td class="end"><img src="img/delete.svg" alt="" width="16px">
                        </td>
                    </tr>
                    <tr class="active-row">
                        <td class="first">1</td>
                        <td>zulfanlorem</td>
                        <td>ganteng</td>
                        <td>uhuyyy</td>
                        <td><img src="img/edit.svg" alt="" width="16px"></td>
                        <td class="end"><img src="img/delete.svg" alt="" width="16px">
                        </td>
                    </tr> -->
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>