
<?php

include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM `tabel_barang`");
$produk = mysqli_fetch_all($query, MYSQLI_ASSOC);  

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon" />
  <link rel="stylesheet" href="css/kucing.css">
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
        <a href="home.php" rel="noopener noreferrer"><img src="img/petstar.png" alt="" width="50%"></a>
      </div>
      <div class="menu">
        <a href="history.php"><img src="img/history.svg" alt="nama-user" width="75%"></a>
        <a href="logout.php"><img src="img/logout-icon.svg" alt="setting" width="75%"></a>
    </nav>
  </header>

  <main>
    <div class="product-side">
      <div class="title-container">
        <p class="product-title">Product</p>
        <a href="tambahProduct.php">
          <input type="button" value="+ Add" class="btn-tambah">
        </a>
      </div>
        <div class="product-container">
        <?php foreach($produk as $p) : ?>
            <div class="product-card">
              <img src="<?php echo $p['FOTO']; ?>" alt="product" class="img-product">
              <div class="edit-cont">
                <a href="editProduk.php?ID_BARANG=<?php echo $p['ID_BARANG']; ?>"><img src="img/edit.svg" alt="back" width="20px"></a>
              </div>
              <div class="product-info">
                <p class="product-name"><?php echo $p['NAMA_BARANG']; ?></p>
                <p class="product-price">Rp <?php echo $p['HARGA']; ?></p>
              </div>
              <a href="detailpesanan.php?ID_BARANG=<?php echo $p['ID_BARANG']; ?>" >
                <input type="button" value="Buy Product" class="product-add">
              </a>
            </div>
        <?php endforeach; ?>
        </div>
      </div>
    </div>
  </main>
  <script src="./js/home.js"></script>
</body>
</html>
