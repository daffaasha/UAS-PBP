<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Detail</title>
    <link rel="stylesheet" href="css/detailpesanan.css">
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
    <div class="title-container">
      <a href="home.php" target="_blank" rel="noopener noreferrer">
        <img src="img/left-arrow.svg" alt="back" width="24px">
      </a>
      <p class="profile-title">Checkout</p>
    </div>

        <form action="" method="post">
        <div class="profile-data">
        <div class="profile-pict-container">
          <img src="img/meong-img.jpg" alt="profile" class="profile-pict">
        </div>
        <div class="profile-form">
          <div class="form-flex">
            <p class="label">Product Name</p>
            <div class="input-form-container">
              <input type="text" name = "username" class="input-form" value = "<?php echo $user['USERNAME']?>" readonly>
            </div>
          </div>
          <div class="name form-flex">
            <p class="label">Product Price</p>
            <div class="input-form-container">
              <input type="text" name = "nama" class="input-form" value = "<?php echo $user['NAMA']?>" readonly>
            </div>
          </div>
          <div class="form-flex">
            <p class="label">Product Quantity</p>
            <div class="quantity">
              <input type="number" name = "email" class="input-form" value = "<?php echo $user['EMAIL']?>">
              <img src="img/pen.svg" alt="edit" class="edit-icon">
            </div>
          </div>
          <div class="number form-flex">
            <p class="label">Payment Method</p>
            <div class="price">
                <select name="method" id="payment">
                    <option value="ovo">OVO</option>
                    <option value="gopay">Gopay</option>
                    <option value="shopeepay">Shopeepay</option>
                    <option value="dana">Dana</option>
                    <option value="cash">Cash</option>
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