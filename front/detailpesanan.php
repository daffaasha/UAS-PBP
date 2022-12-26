<?php
    include "koneksi.php";
  	session_start();
    
 
    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['LEVEL']==""){
      header("location:index.php?pesan=gagal");
    }

    $ID_BARANG = $_GET['ID_BARANG'];
    $query = mysqli_query($koneksi, "SELECT * FROM tabel_barang WHERE ID_BARANG = $ID_BARANG");
    $barang = mysqli_fetch_assoc($query);

    $query1 = mysqli_query($koneksi, "SELECT * FROM tabel_metode");
    $metode = mysqli_fetch_all($query1, MYSQLI_ASSOC);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Detail</title>
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/detailpesanan.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="home.php" rel="noopener noreferrer"><img src="img/petstar.png" alt="" width="50%"></a>
            </div>
            <div class="menu">
                <a href="history.php"><img src="img/history.svg" alt="nama-user" width="75%"></a>
                <a href="logout.php"><img src="img/logout-icon.svg" alt="setting" width="75%"></a>
            </nav>
    </header>

    <main>
    <div class="title-container">
      <a href="home.php" rel="noopener noreferrer">
        <img src="img/left-arrow.svg" alt="back" width="24px">
      </a>
      <p class="profile-title">Checkout</p>
    </div>

        <form action="prosesRiwayat.php" method="POST">
        <div class="profile-data">
        <div class="profile-pict-container">
          <img src="img/meong-img.jpg" alt="profile" class="profile-pict">
        </div>
        <div class="profile-form">
          <div class="form-flex">
            <p class="label">Product Name</p>
            <div class="input-form-container">
              <input type="text" name = "nama_barang" class="input-form" value = "<?php echo $barang['NAMA_BARANG']?>" readonly>
            </div>
          </div>
          <div class="name form-flex">
            <p class="label">Product Price</p>
            <div class="input-form-container">
              <input type="text" name = "harga" class="input-form" value = "<?php echo $barang['HARGA']?>" readonly>
            </div>
          </div>
          <div class="form-flex">
            <p class="label">Product Quantity</p>
            <div class="quantity">
              <input type="number" name = "jumlah" class="input-form" value = 1>
              <img src="img/pen.svg" alt="edit" class="edit-icon">
            </div>
          </div>
          <div class="number form-flex">
            <p class="label">Payment Method</p>
            <div class="price">
                <select name="metode" id="payment">
                    <?php foreach ($metode as $m) :  ?>
                        <option value="<?= $m['ID_METODE'] ?>"> <?= $m['NAMA_METODE'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
          </div>
        </div> 
      </div>

      <input type="button" value="Checkout" class="save-data" onclick="confirmPoppup()">

      <div class="poppup" id="poppup-confirm">
        <img src="img/confirm.svg" alt="confirm" class="poppup-pict">
        <p class="poppup-text">Selesaikan Checkout?</p>
        <div class="buttons">
          <input type="button" value="Cancel" class="cancel-btn" onclick="confirmPoppupCls()">
          <button type ="submit" class = "logout-btn">Checkout</button>
        </div>
      </div>

        </form>
    </main>

    <script src="js/profile.js"></script>
</body>
</html>