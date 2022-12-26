<?php

    include "koneksi.php";

    $query = mysqli_query($koneksi, "SELECT * FROM `tabel_user` WHERE `LEVEL` LIKE 'pegawai' ");
    $admin = mysqli_fetch_all($query, MYSQLI_ASSOC);  

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
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
	if($_SESSION['LEVEL']==""){
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
                <a href="logout.php"><img src="img/logout-icon.svg" alt="setting" width="75%"></a>
            </div>    
                <!-- <ul class="dropdown">
                    <li><a href="#">Log Out</a></li>
                </ul> -->
        </nav>
    </header>
    <main>
        <!-- <div class="container">
            <h1>Data Admin</h1>
            <button type="submit" class="add">+ Tambah Admin</button>
        </div> -->
        <div class="container">
            <h1>DATA USER</h1>
            <a href="tambahUser.php" class="add"><i class="add"></i>+ Tambah User</a>
            <table class="content-table">
                <thead>
                    <tr>
                        <th class="first">No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>Nomer</th>
                        <th colspan="2" class="end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($admin as $a) : ?>
                <tr>
                    <td class="first" ><?php echo $a["ID_USER"]; ?></td>
                    <td><?php echo $a["NAMA"];?></td>
                    <td><?php echo $a["USERNAME"]; ?></td>
                    <td><?php echo $a["PASSWORD"];?></td>
                    <td><?php echo $a["EMAIL"];?></td>
                    <td><?php echo $a["NUMBER"];?></td>
                    <td>
                        <a href="ubahProfile.php?ID_USER=<?php echo $a['ID_USER']; ?>" >
                        <img src="img/edit.svg" alt="" width="16px"> 
                        </a>
                    </td>
                    <td class="end">
                        <a href="hapusProfile.php?ID_USER=<?php echo $a['ID_USER']; ?>">
                            <img src="img/delete.svg" alt="" width="16px">
                        </a>
                    </td>
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