<?php

    include "koneksi.php";

    $query = mysqli_query($koneksi, "SELECT * FROM `tabel_riwayat`");
    $riwayat = mysqli_fetch_all($query, MYSQLI_ASSOC);  

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>History</title>
    <!-- logo -->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />

    <!-- css -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700&display=swap"
        rel="stylesheet"
        />
  </head>
  <body>
    <header>
        <nav>
            <div class="logo">
                <!-- <img src="img/logo.png" alt="" class="logo-kotak" width="25%"> -->
                <img src="img/petstar.png" alt="" width="50%">
            </div>
            <div class="menu">
                <a href="#"><img src="img/history.svg" alt="nama-user" width="75%"></a>
                <a href="#"><img src="img/user-white.svg" alt="setting" width="75%" ></a>
                <!-- <ul class="dropdown">
                    <li><a href="#">Log Out</a></li>
                </ul> -->
        </nav>
    </header>
    <main>
        <div class="container flex-content-middle">
            <img src="img/left-arrow.svg" alt="back" width="24px">
            <h2>Riwayat Pembelian</h2>
        </div>
        <!-- <div class="flex-content-left"> -->
            <form action="" class="container flex-content-left">
                <div class="tanggal">
                    <select name="date" id="date" class="tanggal">
                        <option value="tanggal">tanggal</option>
                        <option value="disini dikasih JS">disini dikasih PHP Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus quae blanditiis et error aspernatur ipsam, nisi laboriosam consectetur! Quasi incidunt, autem explicabo reprehenderit quos ut placeat officiis harum non sit? looping tanggal dari database</option>
                    </select>
                    <!-- <input type="date" name="" id=""> -->
                </div>        
                <div class="search-inp">
                    <input type="text" placeholder="Search">
                </div>
            </form>
        <!-- </div> -->
        <div class="container m">
            <table class="content-table">
                <thead>
                    <tr>
                        <th class="first">ID</th>
                        <th>Date</th>
                        <th>Subtotal</th>
                        <th>Metode</th>
                        <th class="end">Detail</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($riwayat as $r) : ?>
                <tr>
                    <td><?php echo $r["ID_RIWAYAT"]; ?></td>
                    <td><?php echo $r["TANGGAL"];?></td>
                    <td><?php echo $r["TOTAL_HARGA"]; ?></td>
                    <td><?php echo $r["METODE_P"];?></td>
                    <td class="end">
                        <a href="detail.php?ID_USER=<?php echo $a['ID_USER']; ?>" >
                        Detail
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
                    <!-- <tr class="active-row">
                        <td class="first">1</td>
                        <td>Tanggal</td>
                        <td>Cat Food</td>
                        <td>19</td>
                        <td>Rp 360.000</td>
                        <td class="end">GoPay</td>
                    </tr>
                    <tr class="active-row">
                        <td class="first">1</td>
                        <td>Tanggal</td>
                        <td>Cat Food</td>
                        <td>19</td>
                        <td>Rp 360.000</td>
                        <td class="end">GoPay</td>
                    </tr>
                    <tr class="active-row">
                        <td class="first">1</td>
                        <td>Tanggal</td>
                        <td>Cat Food</td>
                        <td>19</td>
                        <td>Rp 360.000</td>
                        <td class="end">GoPay</td>
                    </tr> -->
                </tbody>
            </table>
            <div class="container cetak"><button>Cetak Laporan</button></div>
        </div>
    </main>
  </body>
</html>