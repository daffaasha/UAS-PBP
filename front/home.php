
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
  <header>
    <nav>
      <div class="logo">
        <a href="home.php" target="_blank" rel="noopener noreferrer"><img src="img/petstar.png" alt="" width="50%"></a>
      </div>
      <div class="menu">
        <a href="#"><img src="img/history.svg" alt="nama-user" width="75%"></a>
    </nav>
  </header>

  <main>
    <div class="product-side">
      <div class="search-container">
        <img src="img/lup.svg" alt="find" class="find-logo">
        <input type="text" class="search-input">
      </div>
      <div class="title-container">
        <p class="product-title">Product</p>
        <input type="button" value="+ Add" class="btn-tambah">
      </div>
      <div class="product-container">
      <?php foreach($produk as $p) : ?>
            <div class="product-card">
              <img src="aset/<?php echo $p['FOTO']; ?>" alt="product" class="img-product">
              <div class="product-info">
                <p class="product-name"><?php echo $p['NAMA_BARANG']; ?></p>
                <p class="product-price"><?php echo $p['HARGA']; ?></p>
              </div>
              <input type="button" value="Add Product" class="product-add">
            </div>
        <?php endforeach; ?>
        </div>
      </div>
    </div>
  </main>
  <script src="./js/home.js"></script>
</body>
</html>
