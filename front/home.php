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
        <a href="profile.php"><img src="img/user-white.svg" alt="setting" width="75%"></a>
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
        <div class="product-card">
          <img src="img/meong-img.jpg" alt="product" class="img-product">
          <div class="product-info">
            <p class="product-name">Ini Nama Product</p>
            <p class="product-price">60.000</p>
          </div>
          <input type="button" value="Add Product" class="product-add">
        </div>
      </div>
    </div>
    <div class="price-side">
      <div class="cart-cont">
        <div class="cart-col-header">
          <div class="cart-name">
            <h3 class="name-header">Product Name</h3>
          </div>
          <div class="cart-quantity">
            <h3 class="quantity-header">Quantity</h3>
          </div>
          <div class="cart-price">
            <h3 class="price-header">Price</h3>
          </div>
        </div>

        <div class="cart-col">
          <div class="cart-name">
            <p class="name-item">Royal Canin Enak</p>
          </div>
          <div class="cart-quantity">
            <div class="quantity-input">
              <input type="number">
            </div>
            <button class="delete-item"><img src="img/bin.svg" alt="delete"></button>
          </div>
          <div class="cart-price">
            <p class="price-item">Rp. 60.000</p>
          </div>
        </div>
      </div>
      <div class="total-price">
        <p class="total-text">Total</p>
        <p class="price-final">Rp. Sekian</p>
      </div>
      <div class="process-cont">
        <div class="paying-method">
          <button><img src="img/meong-img.jpg" alt="pay method"></button>
          <button><img src="img/meong-img.jpg" alt="pay method"></button>
          <button><img src="img/meong-img.jpg" alt="pay method"></button>
          <button><img src="img/meong-img.jpg" alt="pay method"></button>
        </div>
        <div class="pay-btn"></div>
      </div>
      
    </div>
  </main>
  <script src="./js/home.js"></script>t
</body>
</html>
