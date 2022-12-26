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
        <div class="product-card">
          <img src="img/cat.webp" alt="product" class="img-product">
          <div class="product-info">
            <p class="product-name">Ini Nama Product</p>
            <p class="product-price">60.000</p>
          </div>
          <input type="button" value="Add Product" class="product-add">
        </div>
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
              <input type="number" value=1>
            </div>
            <input type="button" class="delete-item">
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

      <form action="">
        <div class="process-cont">
          <div class="paying-method">
            <label for="gopay"><img src="img/gopay.jpeg" alt=""/></label>
            <input type="radio" id="gopay" name="pembayaran" value="gopay" hidden required/>
            
            <label for="dana"><img src="img/dana.jpeg" alt=""/></label>
            <input type="radio" id="dana" name="pembayaran" value="dana" hidden required/>
            
            <label for="ovo"><img src="img/ovo.png" alt=""/></label>
            <input type="radio" id="ovo" name="pembayaran" value="ovo" hidden required/>
            
            <label for="shopee"><img src="img/shopeepay.jpeg" alt=""/></label>
            <input type="radio" id="shopee" name="pembayaran" value="shopee" hidden required/>
            
            <label for="cash"><img src="img/cash.webp" alt=""/></label>
            <input type="radio" id="cash" name="pembayaran" value="cash" hidden required/>
          </div>
          <div class="pay-btn">
            <button class="pay-final">Finish Payment</button>
          </div>
        </div>
      </form>
    </div>
  </main>
  <script src="./js/home.js"></script>
</body>
</html>
